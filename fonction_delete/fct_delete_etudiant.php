<?php
    include('../lien_php_sql.php');

    function deleteEtudiant(){
        $Bdd = lienPhpSql();
        $stmt = $Bdd->prepare('DELETE FROM Etudiant WHERE MATRICULE = ?');
        $stmt->execute([$_GET['matricule']]);
    }

    deleteEtudiant();
    header("Location: ../page_read/etudiant.php");
?>
