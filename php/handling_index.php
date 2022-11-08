<?php
include "dataBase.php";

const STATUS_ERROR = 'error';
const STATUS_SUCCESS = 'success';


function fct_contact(array $array) {
	$data = $array ?? [];
	$status = STATUS_SUCCESS;
	$errors = [];

//empty

	if(empty($data['email'])||empty($data['firstname'])||empty($data['lastname'])||empty($data['comments'])) {
		$status = STATUS_ERROR;
		$errors['empty'] = 'Merci de remplir tous les champs';
	
	}

//valid_mail

	if(!empty($data['email'])&& !filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
		$status = STATUS_ERROR;
		$errors['email'] = 'Merci de renseigner un email valide';
	}

//valid lastname + firstname + comments

	function search($string){
		$pattern = '/[^a-zA-ZÀ-ÖØ-öÿŸ\-\_\!\?\"\'\d\s\n]/';

		$a = preg_match($pattern,$string)?true:false;

		return $a;
	}
	 
	if(!empty($data['firstname'])){
		
		$find_first= search($data['firstname']);

		if($find_first==true){
			$status = STATUS_ERROR;
			$errors['first'] = 'Votre prénom contient des caractères non-autorisés';
		}
	}

	if(!empty($data['lastname'])){
		$find_last= search($data['lastname']);

		if($find_last==true){
			$status = STATUS_ERROR;
			$errors['last'] = 'Votre nom contient des caractères non-autorisés';
		}
	}

    if(!empty($data['comments'])){
		$find_last= search($data['comments']);

		if($find_last==true){
			$status = STATUS_ERROR;
			$errors['com'] = 'Votre message contient des caractères non-autorisés';
		}
	}


//connection BDD

	if ($status === STATUS_SUCCESS) { 
		
		try{ 
			$dbco = getConnexion();

			$email = trim($data['email']);
			$first = trim($data['firstname']);
			$last = trim($data['lastname']);
			$com = $data['comments'];
			$date = date('Y-m-d H:i:s');

			//same_email
				
			$sth = $dbco->prepare("
			SELECT COUNT(email) AS count 
			FROM contact WHERE email = :email");
			$sth->bindParam(':email', $email, PDO::PARAM_STR);
			$sth->execute();

			$result = $sth->fetch();
		

			if($result['count'] >= 1){

				$sql = $dbco->prepare("
				INSERT INTO comment(contact_email, date_time, content)
				VALUES(:email, :date, :com)");

				$sql -> bindParam(':email', $email);
				$sql -> bindParam(':date', $date);
				$sql -> bindParam(':com', $com);

				$sql->execute();
				
			} else {

				$sql = $dbco->prepare("
				INSERT INTO contact(email, firstname, lastname)
				VALUES(:email, :first, :last)");

				$sql -> bindParam(':email', $email);
				$sql -> bindParam(':first', $first);
				$sql -> bindParam(':last', $last);

				$sql->execute();

				$sth = $dbco->prepare("
				INSERT INTO comment(contact_email, date_time, content)
				VALUES(:email, :date, :com)");

				$sth -> bindParam(':email', $email);
				$sth -> bindParam(':date', $date);
				$sth -> bindParam(':com', $com);

				$sth->execute();
			}

		}catch(PDOException $e){
			
			var_dump($e -> getMessage());
			$status = STATUS_ERROR;
			$errors['db'] = 'une erreur s\'est produite';
		}

	}


	if ($status === STATUS_ERROR) {
		return [
			'success' => false,
			'errors' => $errors,
		];
	}
    
    return [
        'success' => true,
        'message' => 'Merci pour votre transmission !',
    ];

}

?>