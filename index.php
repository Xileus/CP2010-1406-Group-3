<?php include_once( "dbc.php") ?>
<html>

<body>
    <?php
    $sql = "SELECT * FROM artists";
foreach ($dbh->query($sql) as $row)
{echo "<p><a href=\"artist.php?id=$row[artistID]\">$row[artistName]</a>";}
echo "<p><a href=\"addArtist.php\">add artist</a> (Music not Paint)</p>"
?>
</body>

</html>