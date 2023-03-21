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
                $SOUTENANCE=$Bdd->prepare('SELECT * FROM Soutenir WHERE MATRICULE=?');
                $SOUTENANCE->execute([$_GET['matricule']]);
                $SOUTENANCE=$SOUTENANCE->fetch();
            ?>
            <form action="../fonction_edit/fct_edit_soutenance.php" method="post">
                <label for="matricule">matricule</label><input name="matricule" type="text" id="matricule" value="<?php echo $SOUTENANCE['MATRICULE']?>"><br>
                <label for="idorg">idorg</label><input type="text" id="idorg" name="idorg" value="<?php echo $SOUTENANCE['IDORG']?>"><br>
                <label for="annee_univ">annee_univ</label><input type="text" id="annee_univ" name="annee_univ" value="<?php echo $SOUTENANCE['ANNEE_UNIV']?>"><br>
                <label for="note">note</label><input name="note" type="number" id="note" value="<?php echo $SOUTENANCE['NOTE']?>"><br>
                <label for="president">president</label><input type="text" id="president" name="president" value="<?php echo $SOUTENANCE['PRESIDENT']?>"><br>
                <label for="examinateur">examinateur</label><input type="text" id="examinateur" name="examinateur" value="<?php echo $SOUTENANCE['EXAMINATEUR']?>"><br>
                <label for="rapporteur_int">rapporteur_int</label><input type="text" id="rapporteur_int" name="rapporteur_int" value="<?php echo $SOUTENANCE['RAPPORTEUR_INT']?>"><br>
                <label for="rapporteur_ext">rapporteur_ext</label><input type="text" id="rapporteur_ext" name="rapporteur_ext" value="<?php echo $SOUTENANCE['RAPPORTEUR_EXT']?>"><br>
                <input type="submit" value="valider">   
            </form>
        </div>
        <?php include("../footer.php"); ?>
    </div>
</body>
</html>