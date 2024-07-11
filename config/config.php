<?php


    define("HOST", "localhost");
    define("DBNAME", "pay");
    define("USER", "root");
    define("PASS", "");

    $conn = new PDO("mysql:host=".HOST.";dbname=".DBNAME.";", USER, PASS);

 