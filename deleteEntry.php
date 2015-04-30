<?php include_once("dbc.php");
var_dump($_POST);

$sql = "Delete From artists where artistID = $_GET[id]";
echo $sql;
try{

    $dbh->exec($sql);
    header("Location: index.php");
    die();
} catch (PDOException $e) {
    header("Location: artist.php?id=$_GET[id]");
    die();
} ?>