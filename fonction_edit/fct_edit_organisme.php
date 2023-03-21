<?php
    include('../lien_php_sql.php');
    $Bdd = lienPhpSql();
    $stmt = $Bdd->prepare('UPDATE Organisme SET IDORG=:IDORG,DESIGN=:DESIGN,LIEU=:LIEU WHERE IDORG=:ID');
    $stmt->execute(array(
        'ID'=>$_POST['idorg'],
        'IDORG'=>$_POST['idorg'],
        'DESIGN'=>$_POST['design'],
        'LIEU'=>$_POST['lieu']
    ));
    header("Location: ../page_read/organisme.php"); 
?>