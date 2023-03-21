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
                $PROFESSEUR=$Bdd->prepare('SELECT * FROM Professeur WHERE IDPROF=?');
                $PROFESSEUR->execute([$_GET['idprof']]);
                $PROFESSEUR=$PROFESSEUR->fetch();
            ?>
            <form action="../fonction_edit/fct_edit_professeur.php" method="post">
                <label for="idprof">idprof</label><input name="idprof" type="text" id="idprof" value="<?php echo $PROFESSEUR['IDPROF']?>" readonly><br>
                <label for="nom">nom</label><input type="text" id="nom" name="nom" value="<?php echo $PROFESSEUR['NOM']?>"><br>
                <label for="prenom">prenom</label><input type="text" id="prenom" name="prenom" value="<?php echo $PROFESSEUR['PRENOM']?>"><br>
                <label for="civilite">civilite</label>
                    <select name="civilite" id="civilite">
                        <option value="Mr" <?php if($PROFESSEUR['CIVILITE']=='Mr'){echo "selected";} ?>>Mr</option>
                        <option value="Mlle" <?php if($PROFESSEUR['CIVILITE']=='Mlle'){echo "selected";} ?>>Mlle</option>
                        <option value="Mme" <?php if($PROFESSEUR['CIVILITE']=='Mme'){echo "selected";} ?>>Mme</option>
                    </select>
                <label for="grade">grade</label>
                    <select name="grade" id="grade">
                        <option value="Professeur Titulaire" <?php if($PROFESSEUR['GRADE']=='Professeur Titulaire'){echo "selected";} ?>>Professeur Titulaire</option>
                        <option value="Maitre de conferance" <?php if($PROFESSEUR['GRADE']=='Maitre de conferance'){echo "selected";} ?>>Maitre de conferance</option>
                        <option value="Assistant d'Enseignement Supérieur et de Recherche" <?php if($PROFESSEUR['GRADE']=='Assistant d\'Enseignement Supérieur et de Recherche'){echo "selected";} ?>>Assistant d'Enseignement Supérieur et de Recherche</option>
                        <option value="Docteur HDR" <?php if($PROFESSEUR['GRADE']=='Docteur HDR'){echo "selected";} ?>>Docteur HDR</option>
                        <option value="Docteur en Informatique" <?php if($PROFESSEUR['GRADE']=='Docteur en Informatique'){echo "selected";} ?>>Docteur en Informatique</option>
                        <option value="Doctorant en informatique" <?php if($PROFESSEUR['GRADE']=='Doctorant en informatique'){echo "selected";} ?>>Doctorant en informatique</option>
                    </select>
                <br>
                <input type="submit" value="valider">
            </form>
        </div>
        <?php include("../footer.php"); ?>
    </div>
</body>
</html>