<?php
    include('../lien_php_sql.php');
    function addOrganisme($idorg,$design,$lieu){
        $Bdd=lienPhpSql();
        $or=$Bdd->prepare('insert into Organisme(IDORG,DESIGN,LIEU) VALUES(:IDORG,:DESIGN,:LIEU)');
        $or->execute(array(
            'IDORG'=>$idorg,
            'DESIGN'=>$design,
            'LIEU'=>$lieu
        ));
    }

    addOrganisme($_POST['idorg'],$_POST['design'],$_POST['lieu']);
    header("Location: ../page_read/organisme.php");
?>