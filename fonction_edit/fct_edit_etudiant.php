<?php
    include('../lien_php_sql.php');
    $Bdd = lienPhpSql();
    $stmt = $Bdd->prepare('UPDATE Etudiant SET MATRICULE=:MATRICULE,NOM=:NOM,PRENOM=:PRENOM,
    PARCOURS=:PARCOURS,NIVEAU=:NIVEAU,ADR_MAIL=:ADR_MAIL WHERE MATRICULE=:ID');
    $stmt->execute(array(
        'ID'=>$_POST['matricule'],
        'MATRICULE'=>$_POST['matricule'],
        'NOM'=>$_POST['nom'],
        'PRENOM'=>$_POST['prenom'],
        'PARCOURS'=>$_POST['parcours'],
        'NIVEAU'=>$_POST['niveau'],
        'ADR_MAIL'=>$_POST['adr_mail']
    ));
    header("Location: ../page_read/etudiant.php"); 
?>
