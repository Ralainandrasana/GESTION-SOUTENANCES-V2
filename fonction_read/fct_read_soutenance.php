<?php
    include('../lien_php_sql.php');
    function readSoutenance(&$matricule,&$idorg,&$annee_univ,&$note,&$president,&$examinateur,&$rapp_int,&$rapp_ext){
        $Bdd=lienPhpSql();
        $sout=$Bdd->query('select * from Soutenir');
        $matricule=$idorg=$annee_univ=$note=$president=$examinateur=$rapp_int=$rapp_ext=[];
        while($SOUTENANCE=$sout->fetch()){
            array_push($matricule, $SOUTENANCE['MATRICULE']);
            array_push($idorg, $SOUTENANCE['IDORG']);
            array_push($annee_univ, $SOUTENANCE['ANNEE_UNIV']);
            array_push($note, $SOUTENANCE['NOTE']);
            array_push($president, $SOUTENANCE['PRESIDENT']);
            array_push($examinateur, $SOUTENANCE['EXAMINATEUR']);
            array_push($rapp_int, $SOUTENANCE['RAPPORTEUR_INT']);
            array_push($rapp_ext, $SOUTENANCE['RAPPORTEUR_EXT']);
        }
    }
?>

<?php
    function afficheSoutenance(&$matricule,&$idorg,&$annee_univ,&$note,&$president,&$examinateur,&$rapp_int,&$rapp_ext){
?>
        <tr>
            <th>matricule</th>
            <th>idorg</th>
            <th>annee_univ</th>
            <th>note</th>
            <th>president</th>
            <th>examinateur</th>
            <th>rapporteur_int</th>
            <th>rapporteur_ext</th>
            <th colspan="3">action</th>
        </tr>
<?php
        for($i=0;$i<count($matricule);$i++){
?>
            <tr>
                <td><?php echo $matricule[$i]; ?></td>
                <td><?php echo $idorg[$i]; ?></td>
                <td><?php echo $annee_univ[$i]; ?></td>
                <td><?php echo $note[$i]; ?></td>
                <td><?php echo $president[$i]; ?></td>
                <td><?php echo $examinateur[$i]; ?></td>
                <td><?php echo $rapp_int[$i]; ?></td>
                <td><?php echo $rapp_ext[$i]; ?></td>
                <td><a href="../page_edit/edit_soutenance.php?matricule=<?php echo $matricule[$i]; ?>"><i class="fas fa-edit" style="color:#6A964E;"></i></a></td>
                <td><a href="../fonction_delete/fct_delete_soutenance.php?matricule=<?php echo $matricule[$i]; ?>"><i class="fas fa-trash-alt" style="color:#AB4C27;"></i></a></td>
                <td><a href="../generate_pv/creation_pdf.php?matricule=<?php echo $matricule[$i]; ?>"><i class="fas fa-file-pdf" style="color:#4E5696;"></i></a></td>
            </tr>
<?php
        }
    }
?>
