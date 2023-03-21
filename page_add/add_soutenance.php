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
            <form action="../fonction_add/fct_add_soutenance.php" method="post">
                <label for="matricule">matricule</label><input name="matricule" type="text" id="matricule"><br>
                <label for="idorg">idorg</label><input type="text" id="idorg" name="idorg"><br>
                <label for="annee_univ">annee_univ</label><input type="text" id="annee_univ" name="annee_univ"><br>
                <label for="note">note</label><input name="note" type="number" id="note"><br>
                <label for="president">president</label><input type="text" id="president" name="president"><br>
                <label for="examinateur">examinateur</label><input type="text" id="examinateur" name="examinateur"><br>
                <label for="rapporteur_int">rapporteur_int</label><input type="text" id="rapporteur_int" name="rapporteur_int"><br>
                <label for="rapporteur_ext">rapporteur_ext</label><input type="text" id="rapporteur_ext" name="rapporteur_ext"><br>
                <input type="submit" value="valider">   
            </form>
        </div>
        <?php include("../footer.php"); ?>
    </div>
</body>
</html>