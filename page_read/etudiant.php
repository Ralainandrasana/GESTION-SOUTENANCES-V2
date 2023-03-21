<!DOCTYPE html>
<html lang="en">
<?php include("../head.php") ?>
<body>
    <div class="wrapper">
        <?php include("../header.php"); ?>
        <div class="container">
            <div class="bouton">
                <form action="../page_add/add_etudiant.php" method="post">
                    <input type="hidden">
                    <input type="submit" id="add" value="+">
                </form>
                <form>
                    <input type="text" id="input_search">
                    <input type="submit" id="search" value="search">
            </form>
            </div>
            <div class="tableau">
                <table>
                    <?php
                        include('../fonction_read/fct_read_etudiant.php');
                        $matricule=$nom=$prenom=$parcours=$niveau=$adr_mail=[];
                        readEtudiant($matricule,$nom,$prenom,$parcours,$niveau,$adr_mail);
                        afficheEtudiant($matricule,$nom,$prenom,$parcours,$niveau,$adr_mail);
                    ?>
                </table>
            </div>
        </div>
        <?php include("../footer.php"); ?>
    </div>
</body>
</html>