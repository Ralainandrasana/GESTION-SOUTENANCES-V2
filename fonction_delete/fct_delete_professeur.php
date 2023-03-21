<?php
    include('../lien_php_sql.php');

    function deleteProfesseur(){
        $Bdd = lienPhpSql();
        $stmt = $Bdd->prepare('DELETE FROM Professeur WHERE IDPROF = ?');
        $stmt->execute([$_GET['idprof']]);
    }

    deleteProfesseur();
    header("Location: ../page_read/professeur.php");
?>
