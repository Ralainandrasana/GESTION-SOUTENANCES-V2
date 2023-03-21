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
                $ETUDIANT=$Bdd->prepare('SELECT * FROM Etudiant WHERE MATRICULE=?');
                $ETUDIANT->execute([$_GET['matricule']]);
                $ETUDIANT=$ETUDIANT->fetch();
            ?>
            <form action="../fonction_edit/fct_edit_etudiant.php" method="post">
                <label for="matricule">matricule</label><input name="matricule" type="text" id="matricule" value="<?php echo $ETUDIANT['MATRICULE']?>" readonly><br>
                <label for="nom">nom</label><input type="text" id="nom" name="nom" value="<?php echo $ETUDIANT['NOM']?>"><br>
                <label for="prenom">prenom</label><input type="text" id="prenom" name="prenom" value="<?php echo $ETUDIANT['PRENOM']?>"><br>
                <label for="niveau">niveau</label>
                   <select name="niveau" id="niveau">
                        <option value="L1" <?php if($ETUDIANT['NIVEAU']=='L1'){echo "selected";} ?>>L1</option>
                        <option value="L2" <?php if($ETUDIANT['NIVEAU']=='L2'){echo "selected";} ?>>L2</option>
                        <option value="L3" <?php if($ETUDIANT['NIVEAU']=='L3'){echo "selected";} ?>>L3</option>
                        <option value="M1" <?php if($ETUDIANT['NIVEAU']=='M1'){echo "selected";} ?>>M1</option>
                        <option value="M2" <?php if($ETUDIANT['NIVEAU']=='M2'){echo "selected";} ?>>M2</option>
                    </select>
                <label for="parcours">parcours</label>
                    <select name="parcours" id="parcours">
                        <option value="GB" <?php if($ETUDIANT['PARCOURS']=='GB'){echo "selected";} ?>>GB</option>
                        <option value="IG" <?php if($ETUDIANT['PARCOURS']=='IG'){echo "selected";} ?>>IG</option>
                        <option value="SR" <?php if($ETUDIANT['PARCOURS']=='SR'){echo "selected";} ?>>SR</option>
                    </select>
                <br>
                <label for="adr_mail">adr_mail</label><input type="text" id="adr_mail" name="adr_mail" value="<?php echo $ETUDIANT['ADR_MAIL']?>"><br>
                <input type="submit" value="valider">
            </form>
        </div>
        <?php include("../footer.php"); ?>
    </div>
</body>
</html>