<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "blog";

try {
    $connection = new PDO(
        "mysql:host=$servername;dbname=$dbname",
        $username,
        $password
    );
    // set the PDO error mode to exception
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
}


function fetch($sql, $connection, $isFetchAll = false)
{
    $statement = $connection->prepare($sql);
    $statement->execute();
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    if($isFetchAll) {
        return $statement->fetchAll();
    }

    return $statement->fetch();
}
