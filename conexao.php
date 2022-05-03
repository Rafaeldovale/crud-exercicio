<?php

$servidor = 'localhost';
$usuario = "root";
$senha ="";
$dbname = "crudProjetoInt";

$pdo = new PDO("mysql:dbname=".$dbname.
    ";host=".$servidor,$usuario,$senha);



