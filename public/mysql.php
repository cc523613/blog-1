<?php
$hostname = '104.245.190.186:23306';
/*** MySQL username ***/
$username = 'root';
/*** MySQL password ***/
$password = '123456';

function testdb_connect ($hostname, $username, $password){
    $dbh = new PDO("mysql:host=$hostname;dbname=mysql", $username, $password);
    return $dbh;
}

try {
    $dbh = testdb_connect ($hostname, $username, $password);
    echo 'Connected to database';
} catch(PDOException $e) {
    echo $e->getMessage();
}
