<?php
    include('../lien_php_sql.php');

    function deleteOrganisme(){
        $Bdd = lienPhpSql();
        $stmt = $Bdd->prepare('DELETE FROM Organisme WHERE IDORG = ?');
        $stmt->execute([$_GET['idorg']]);
    }

    deleteOrganisme();
    header("Location: ../page_read/organisme.php");
?>
