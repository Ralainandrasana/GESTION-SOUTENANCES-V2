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
            <?php
                include('../lien_php_sql.php');
                $Bdd=lienPhpSql();
                $ORGANISME=$Bdd->prepare('SELECT * FROM Organisme WHERE IDORG=?');
                $ORGANISME->execute([$_GET['idorg']]);
                $ORGANISME=$ORGANISME->fetch();
            ?>
            <form action="../fonction_edit/fct_edit_organisme.php" method="post">
                <label for="idorg">idorg</label><input name="idorg" type="text" id="idorg" value="<?php echo $ORGANISME['IDORG']?>" readonly><br>
                <label for="design">design</label><input type="text" id="design" name="design" value="<?php echo $ORGANISME['DESIGN']?>"><br>
                <label for="lieu">lieu</label><input type="text" id="lieu" name="lieu" value="<?php echo $ORGANISME['LIEU']?>"><br>
                <input type="submit" value="valider">
            </form>
        </div>
        <?php include("../footer.php"); ?>
    </div>
</body>
</html>