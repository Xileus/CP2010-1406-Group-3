<?php include_once("dbc.php");
if (strlen($_GET[artistName]) == 0){header("Location: addArtist.php");
    die();}

$sql = "Insert into artists (artistname, artistInfo) Values (\"$_GET[artistName]\", \"$_GET[artistInfo]\")";

try{

    $dbh->exec($sql);
    header("Location: index.php");
    die();
} catch (PDOException $e) {
    header("Location: addArtist.php");
    die();
} ?>