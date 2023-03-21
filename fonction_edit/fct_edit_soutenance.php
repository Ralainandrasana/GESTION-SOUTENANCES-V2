<?php
    include('../lien_php_sql.php');
    $Bdd = lienPhpSql();
    $stmt = $Bdd->prepare('UPDATE Soutenir SET MATRICULE=:MATRICULE,IDORG=:IDORG,ANNEE_UNIV=:ANNEE_UNIV,
    NOTE=:NOTE,PRESIDENT=:PRESIDENT,EXAMINATEUR=:EXAMINATEUR,RAPPORTEUR_INT=:RAPPORTEUR_INT,RAPPORTEUR_EXT=:RAPPORTEUR_EXT WHERE MATRICULE=:ID');
    $stmt->execute(array(
        'ID'=>$_POST['matricule'],
        'MATRICULE'=>$_POST['matricule'],
        'IDORG'=>$_POST['idorg'],
        'ANNEE_UNIV'=>$_POST['annee_univ'],
        'NOTE'=>$_POST['note'],
        'PRESIDENT'=>$_POST['president'],
        'EXAMINATEUR'=>$_POST['examinateur'],
        'RAPPORTEUR_INT'=>$_POST['rapporteur_int'],
        'RAPPORTEUR_EXT'=>$_POST['rapporteur_ext']
    ));
    header("Location: ../page_read/soutenance.php"); 
?>
