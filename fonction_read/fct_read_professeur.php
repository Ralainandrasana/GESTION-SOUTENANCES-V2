<?php
    include('../lien_php_sql.php');
    function readProfesseur(&$idprof,&$nom,&$prenom,&$civilite,&$grade){
        $Bdd=lienPhpSql();
        $pr=$Bdd->query('select * from Professeur');
        $idprof=$nom=$prenom=$civilite=$grade=[];
        while($PROFESSEUR=$pr->fetch()){
            array_push($idprof, $PROFESSEUR['IDPROF']);
            array_push($nom, $PROFESSEUR['NOM']);
            array_push($prenom, $PROFESSEUR['PRENOM']);
            array_push($civilite, $PROFESSEUR['CIVILITE']);
            array_push($grade, $PROFESSEUR['GRADE']);
        }
    }
?>

<?php
    function afficheProfesseur($idprof,$nom,$prenom,$civilite,$grade){
?>
        <tr>
            <th>idprof</th>
            <th>nom</th>
            <th>prenom</th>
            <th>civilite</th>
            <th>grade</th>
            <th colspan="2">action</th>
        </tr>
<?php
        for($i=0;$i<count($idprof);$i++){
?>
            <tr>
                <td><?php echo $idprof[$i]; ?></td>
                <td><?php echo $nom[$i]; ?></td>
                <td><?php echo $prenom[$i]; ?></td>
                <td><?php echo $civilite[$i]; ?></td>
                <td><?php echo $grade[$i]; ?></td>
                <td><a href="../page_edit/edit_professeur.php?idprof=<?php echo $idprof[$i]; ?>"><i class="fas fa-edit" style="color:#6A964E;"></i></a></td>
                <td><a href="../fonction_delete/fct_delete_professeur.php?idprof=<?php echo $idprof[$i]; ?>"><i class="fas fa-trash-alt" style="color:#AB4C27;"></i></a></td>
            </tr>
<?php
        }
    }
?>
