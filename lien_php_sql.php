<?php
    function lienPhpSql(){
        $BDD=new PDO("mysql:host=localhost;dbname=BDD_PROJET","root","");
        return $BDD;
    }
?>