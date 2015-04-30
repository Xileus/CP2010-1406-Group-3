<?php include_once("dbc.php");
if (strlen($_GET[artistName]) == 0){
    header("Location: artist.php?id=$_GET[id]");
    die();
}


$sql = "Update artists Set artistname=\"$_GET[artistName]\", artistInfo=\"$_GET[artistInfo]\" Where artistID = $_GET[id]";
echo $sql;
try{

    $dbh->exec($sql);
    header("Location: index.php");
    die();
} catch (PDOException $e) {
    header("Location: artist.php?id=$_GET[id]");
    die();
} ?>