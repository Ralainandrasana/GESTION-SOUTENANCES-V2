<?php
    include('../lien_php_sql.php');
    function addEtudiant($matricule,$nom,$prenom,$parcours,$niveau,$adr_mail){
        $Bdd=lienPhpSql();
        $et=$Bdd->prepare('insert into Etudiant(MATRICULE,NOM,PRENOM,PARCOURS,NIVEAU,ADR_MAIL) VALUES(:MATRICULE,:NOM,:PRENOM,:PARCOURS,:NIVEAU,:ADR_MAIL)');
        $et->execute(array(
            'MATRICULE'=>$matricule,
            'NOM'=>$nom,
            'PRENOM'=>$prenom,
            'PARCOURS'=>$parcours,
            'NIVEAU'=>$niveau,
            'ADR_MAIL'=>$adr_mail
        ));
    }

    addEtudiant($_POST['matricule'],$_POST['nom'],$_POST['prenom'],$_POST['parcours'],$_POST['niveau'],$_POST['adr_mail']);
    header("Location: ../page_read/etudiant.php");
?>