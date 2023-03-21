<!DOCTYPE html>
<html lang="en">
<?php include("../head.php") ?>
<body>
    <div class="wrapper">
        <div class="header">
            <h2 class="titre">GESTION DES SOUTENANCES</h2>
            <nav class="navig">
            <ul>
                <li><a href="../page_read/etudiant.php">Etudiant</a></li>
                <li><a href="../page_read/professeur.php">Professeur</a></li>
                <li><a href="../page_read/soutenance.php">Soutenance</a></li>
                <li><a href="../page_read/organisme.php">Organisme</a></li>
                <li><a href="#">Plus</a></li>
            </ul>
            </nav>
        </div>  
        <div class="container">
            <form action="../fonction_add/fct_add_organisme.php" method="post">
                <label for="idorg">idorg</label><input name="idorg" type="text" id="idorg"><br>
                <label for="design">design</label><input type="text" id="design" name="design"><br>
                <label for="lieu">lieu</label><input type="text" id="lieu" name="lieu"><br>
                <input type="submit" value="valider">
            </form>
        </div>
        <?php include("../footer.php"); ?>
    </div>
</body>
</html>