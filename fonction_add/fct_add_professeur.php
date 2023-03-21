<?php
    include('../lien_php_sql.php');
    function addProfesseur($idprof,$nom,$prenom,$civilite,$grade){
        $Bdd=lienPhpSql();
        $pr=$Bdd->prepare('insert into Professeur(IDPROF,NOM,PRENOM,CIVILITE,GRADE) VALUES(:IDPROF,:NOM,:PRENOM,:CIVILITE,:GRADE)');
        $pr->execute(array(
            'IDPROF'=>$idprof,
            'NOM'=>$nom,
            'PRENOM'=>$prenom,
            'CIVILITE'=>$civilite,
            'GRADE'=>$grade
        ));
    }

    addProfesseur($_POST['idprof'],$_POST['nom'],$_POST['prenom'],$_POST['civilite'],$_POST['grade']);
    header("Location: ../page_read/professeur.php");
?>