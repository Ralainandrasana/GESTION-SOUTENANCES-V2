<?php
    include('../lien_php_sql.php');
    $Bdd = lienPhpSql();
    $stmt = $Bdd->prepare('UPDATE Professeur SET IDPROF=:IDPROF,NOM=:NOM,PRENOM=:PRENOM,
    CIVILITE=:CIVILITE,GRADE=:GRADE WHERE IDPROF=:ID');
    $stmt->execute(array(
        'ID'=>$_POST['idprof'],
        'IDPROF'=>$_POST['idprof'],
        'NOM'=>$_POST['nom'],
        'PRENOM'=>$_POST['prenom'],
        'CIVILITE'=>$_POST['civilite'],
        'GRADE'=>$_POST['grade']
    ));
    header("Location: ../page_read/professeur.php"); 
?>
