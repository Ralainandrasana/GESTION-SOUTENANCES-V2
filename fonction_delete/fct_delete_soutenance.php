<?php
    include('../lien_php_sql.php');

    function deleteSoutenance(){
        $Bdd = lienPhpSql();
        $stmt = $Bdd->prepare('DELETE FROM Soutenir WHERE MATRICULE = ?');
        $stmt->execute([$_GET['matricule']]);
    }

    deleteSoutenance();
    header("Location: ../page_read/soutenance.php");
?>
