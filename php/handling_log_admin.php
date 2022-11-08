<?php 
include "dataBase.php";


const STATUS_ERROR = 'error';
const STATUS_SUCCESS = 'success';


function fct_connexion(array $array) {
	$data = $array ?? [];
	$status = STATUS_SUCCESS;
	$errors = [];


	if (empty($data['password'])) {
		$status = STATUS_ERROR;
		$errors['password'] = 'Le mot de passe est vide';
	}

	if (empty($data['id'])) {
		$status = STATUS_ERROR;
		$errors['id'] = 'L\'identifiant n\'est pas renseigné';
	}

	if(!empty($data['password'])&&!empty($data['id'])){
		
		$dbco = getConnexion();

			$id = trim($data['id']);

			$sth = $dbco->prepare("
			SELECT COUNT(admin_id) AS count FROM admin
			WHERE admin_id = :id");
			$sth->bindParam(':id', $id );
			$sth->execute();

			$result = $sth->fetch();

			if ($result['count'] == 0){
				$status = STATUS_ERROR;
				$errors['invalid_count'] = 'Vos identifiants sont invalides';
			}
	}

	if ($status == STATUS_SUCCESS) { 

		$pass = $data['password'];
		$id = $data['id'];

		try{
			$sth = $dbco->prepare("
                            SELECT password FROM admin
                            WHERE admin_id = :id");

			$sth->bindParam(':id', $id);
			$sth->execute();

			$pass_hash = $sth->fetch();

            if(!password_verify($pass,$pass_hash['password'])){
                $status = STATUS_ERROR;
                $errors['invalid_hash'] = 'Vos identifiants sont invalides';
            }

		}catch(PDOException $e){
			$status = STATUS_ERROR;
			$e->getMessage();
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
        'id' => $id,
    ];

}
?>