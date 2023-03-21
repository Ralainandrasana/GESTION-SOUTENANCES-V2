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
            <form action="../fonction_add/fct_add_etudiant.php" method="post">
                <label for="matricule">matricule</label><input name="matricule" type="text" id="matricule"><br>
                <label for="nom">nom</label><input type="text" id="nom" name="nom"><br>
                <label for="prenom">prenom</label><input type="text" id="prenom" name="prenom"><br>
                <label for="niveau">niveau</label>
                    <select name="niveau" id="niveau">
                        <option value="L1">L1</option>
                        <option value="L2">L2</option>
                        <option value="L3">L3</option>
                        <option value="M1">M1</option>
                        <option value="M2">M2</option>
                    </select>
                <label for="parcours">parcours</label>
                    <select name="parcours" id="parcours">
                        <option value="GB">GB</option>
                        <option value="IG">IG</option>
                        <option value="SR">SR</option>
                    </select>
                <br>
                <label for="adr_mail">adr_mail</label><input type="text" id="adr_mail" name="adr_mail"><br>
                <input type="submit" value="valider">
            </form>
        </div>
        <?php include("../footer.php"); ?>
    </div>
</body>
</html>