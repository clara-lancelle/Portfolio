<?php 
include "dataBase.php";

function get_all_comments($current_page){
    
    try {
        $dbco = getConnexion();
        
        $sql = $dbco->prepare("
            SELECT COUNT(*) AS comments_nb 
            FROM comment");
            $sql->execute();
            $result= $sql->fetch();

// gestion des pages

        $comments_nb = (int) $result['comments_nb'];
        $parPage = 4;
        $pages_nb = ceil($comments_nb / $parPage);

        $first = ($current_page * $parPage) - $parPage;

// récupération des recettes

        $sth = $dbco->prepare("
            SELECT contact.*, comment.*
            FROM contact 
            INNER JOIN comment ON comment.contact_email = contact.email
            ORDER BY comment.date_time DESC
            LIMIT :first, :parpage
            "); 
            $sth -> bindParam(':first',$first,PDO::PARAM_INT);
            $sth -> bindParam(':parpage',$parPage,PDO::PARAM_INT);
            $sth->execute();

            $comments= $sth->fetchAll();
           

    }catch(PDOException $e){
        $e->getMessage();
    }

    if(isset($e)){
        return $e ;
    }

    return [
        'comments'=>$comments,
        'comments_nb'=>$comments_nb,
        'pages_nb'=>$pages_nb,
        'first'=>$first,
        
    ];
       
}

?>