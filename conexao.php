<?php

$servidor = 'localhost';
$usuario = "root";
$senha ="";
$dbname = "crudrafael";

$pdo = new PDO("mysql:dbname=".$dbname.
    ";host=".$servidor,$usuario,$senha);



