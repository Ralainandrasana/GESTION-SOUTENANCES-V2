<?php
    include('../lien_php_sql.php');
    function addSoutenance($matricule,$idorg,$annee_univ,$note,$president,$examinateur,$rapporteur_int,$rapporteur_ext){
        $Bdd=lienPhpSql();
        $st=$Bdd->prepare('insert into Soutenir(MATRICULE,IDORG,ANNEE_UNIV,NOTE,PRESIDENT,EXAMINATEUR,RAPPORTEUR_INT,RAPPORTEUR_EXT) VALUES(:MATRICULE,:IDORG,:ANNEE_UNIV,:NOTE,:PRESIDENT,:EXAMINATEUR,:RAPPORTEUR_INT,:RAPPORTEUR_EXT)');
        $st->execute(array(
            'MATRICULE'=>$matricule,
            'IDORG'=>$idorg,
            'ANNEE_UNIV'=>$annee_univ,
            'NOTE'=>$note,
            'PRESIDENT'=>$president,
            'EXAMINATEUR'=>$examinateur,
            'RAPPORTEUR_INT'=>$rapporteur_int,
            'RAPPORTEUR_EXT'=>$rapporteur_ext
        ));
    }

    addSoutenance($_POST['matricule'],$_POST['idorg'],$_POST['annee_univ'],$_POST['note'],$_POST['president'],$_POST['examinateur'],$_POST['rapporteur_int'],$_POST['rapporteur_ext']);
    header("Location: ../page_read/soutenance.php");
?>