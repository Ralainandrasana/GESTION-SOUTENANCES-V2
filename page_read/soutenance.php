<!DOCTYPE html>
<html lang="en">
<?php include("../head.php") ?>
<body>
    <div class="wrapper">
        <?php include("../header.php"); ?>
        <div class="container">
            <div class="bouton">
                <form action="../page_add/add_soutenance.php" method="post">
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
                        include('../fonction_read/fct_read_soutenance.php');
                        $matricule=$idorg=$annee_univ=$note=$president=$examinateur=$rapp_int=$rapp_ext=[];
                        readSoutenance($matricule,$idorg,$annee_univ,$note,$president,$examinateur,$rapp_int,$rapp_ext);
                        afficheSoutenance($matricule,$idorg,$annee_univ,$note,$president,$examinateur,$rapp_int,$rapp_ext);
                    ?>
                </table>
            </div>
        </div>
        <?php include("../footer.php"); ?>
    </div>
    <script src="../script_js/script.js"></script>
</body>
</html>