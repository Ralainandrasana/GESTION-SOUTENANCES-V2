<?php  
    include("../lien_php_sql.php");
    $nom=$prenom=$parcours=$president=$examinateur=$rapporteur_int=$rapporteur_ext="";
    $note=$cell_width=0;
    $Bdd=lienPhpSql();
    $info=$Bdd->prepare('SELECT * FROM Soutenir WHERE MATRICULE=?');
    $info->execute([$_GET['matricule']]);
    $info=$info->fetch();

    //PARCOURS
    $parc=$Bdd->prepare('SELECT PARCOURS FROM Etudiant WHERE MATRICULE=?');
    $parc->execute([$info['MATRICULE']]);
    $parc=$parc->fetch();
    switch($parc[0]){
        case 'GB': $parcours="Genie Logiciel et Base de Donnee";$cell_width=78;
        break;
        case 'IG': $parcours="Informatique General";$cell_width=88;
        break;
        case 'SR': $parcours="Systeme et Reseau";$cell_width=88;
        break;
    }

    //NOM
    $nm=$Bdd->prepare('SELECT NOM FROM Etudiant WHERE MATRICULE=?');
    $nm->execute([$info['MATRICULE']]);
    $nm=$nm->fetch();
    $nom=$nm[0];
    
    //PRENOM
    $prenm=$Bdd->prepare('SELECT PRENOM FROM Etudiant WHERE MATRICULE=?');
    $prenm->execute([$info['MATRICULE']]);
    $prenm=$prenm->fetch();
    $prenom=$prenm[0];
    
    //NOTE
    $note=$info['NOTE'];

    //PRESIDENT
    $pres=$Bdd->prepare('SELECT * FROM Professeur WHERE IDPROF=?');
    $pres->execute([$info['PRESIDENT']]);
    $pres=$pres->fetch();
    $president=$pres['CIVILITE']." ".$pres['NOM']." ".$pres['PRENOM'].", ".$pres['GRADE'];

    //EXAMINATEUR
    $exam=$Bdd->prepare('SELECT * FROM Professeur WHERE IDPROF=?');
    $exam->execute([$info['EXAMINATEUR']]);
    $exam=$exam->fetch();
    $examinateur=$exam['CIVILITE']." ".$exam['NOM']." ".$exam['PRENOM'].", ".$exam['GRADE'];

    //RAPPORTEURS_INT
    $rapp_int=$Bdd->prepare('SELECT * FROM Professeur WHERE IDPROF=?');
    $rapp_int->execute([$info['RAPPORTEUR_INT']]);
    $rapp_int=$rapp_int->fetch();
    $rapporteur_int=$rapp_int['CIVILITE']." ".$rapp_int['NOM']." ".$rapp_int['PRENOM'].", ".$rapp_int['GRADE']; 

    //RAPPORTEUR_EXT
    $rapp_ext=$Bdd->prepare('SELECT * FROM Professeur WHERE IDPROF=?');
    $rapp_ext->execute([$info['RAPPORTEUR_EXT']]);
    $rapp_ext=$rapp_ext->fetch();
    $rapporteur_ext=$rapp_ext['CIVILITE']." ".$rapp_ext['NOM']." ".$rapp_ext['PRENOM'].", ".$rapp_ext['GRADE'];
?>