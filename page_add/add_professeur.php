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
            <form action="../fonction_add/fct_add_professeur.php" method="post">
                <label for="idprof">idprof</label><input name="idprof" type="text" id="idprof"><br>
                <label for="nom">nom</label><input type="text" id="nom" name="nom"><br>
                <label for="prenom">prenom</label><input type="text" id="prenom" name="prenom"><br>
                <label for="civilite">civilite</label>
                    <select name="civilite" id="civilite">
                        <option value="Mr">Mr</option>
                        <option value="Mlle">Mlle</option>
                        <option value="Mme">Mme</option>
                    </select>
                <label for="grade">grade</label>
                    <select name="grade" id="grade">
                        <option value="Professeur Titulaire">Professeur Titulaire</option>
                        <option value="Maitre de conferance">Maitre de conferance</option>
                        <option value="Assistant d'Enseignement Supérieur et de Recherche">Assistant d'Enseignement Supérieur et de Recherche</option>
                        <option value="Docteur HDR">Docteur HDR</option>
                        <option value="Docteur en Informatique">Docteur en Informatique</option>
                        <option value="Doctorant en informatique">Doctorant en informatique</option>
                    </select>
                <br>
                <input type="submit" value="valider">
            </form>
        </div>
        <?php include("../footer.php"); ?>
    </div>
</body>
</html>