<?php
    include('../lien_php_sql.php');
    function readEtudiant(&$matricule,&$nom,&$prenom,&$parcours,&$niveau,&$adr_mail){
        $Bdd=lienPhpSql();
        $et=$Bdd->query('select * from Etudiant');
        $matricule=$nom=$prenom=$parcours=$niveau=$adr_mail=[];
        while($ETUDIANT=$et->fetch()){
            array_push($matricule, $ETUDIANT['MATRICULE']);
            array_push($nom, $ETUDIANT['NOM']);
            array_push($prenom, $ETUDIANT['PRENOM']);
            array_push($parcours, $ETUDIANT['PARCOURS']);
            array_push($niveau, $ETUDIANT['NIVEAU']);
            array_push($adr_mail, $ETUDIANT['ADR_MAIL']);
        }
    }
?>

<?php
    function afficheEtudiant(&$matricule,&$nom,&$prenom,&$parcours,&$niveau,&$adr_mail){
?>
        <tr>
            <th>matricule</th>
            <th>nom</th>
            <th>prenom</th>
            <th>parcours</th>
            <th>niveau</th>
            <th>adr_mail</th>
            <th colspan="2">action</th>
        </tr>
<?php
        for($i=0;$i<count($matricule);$i++){
?>
            <tr>
                <td><?php echo $matricule[$i]; ?></td>
                <td><?php echo $nom[$i]; ?></td>
                <td><?php echo $prenom[$i]; ?></td>
                <td><?php echo $parcours[$i]; ?></td>
                <td><?php echo $niveau[$i]; ?></td>
                <td><?php echo $adr_mail[$i]; ?></td>
                <td><a href="../page_edit/edit_etudiant.php?matricule=<?php echo $matricule[$i]; ?>"><i class="fas fa-edit" style="color:#6A964E;"></i></a></td>
                <td><a href="../fonction_delete/fct_delete_etudiant.php?matricule=<?php echo $matricule[$i]; ?>"><i class="fas fa-trash-alt" style="color:#AB4C27;"></i></a></td>
            </tr>
<?php
        }
    }
?>
