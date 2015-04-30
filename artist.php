<?php include_once("dbc.php");
$sql = "select * from artists where artistID = $_GET[id]";
$result = $dbh->query($sql);
foreach($result as $row){echo "$row[artistID], $row[artistName], $row[artistInfo], <img src=$row[artistPicture] height=100px, width =150px>";}

echo "<form  action=\"submitUpdate.php\">
<table>
<tr>
<td><input type=\"hidden\" name=\"id\" value=\"$_GET[id]\"></td>
</tr>
<tr>
<td>Artist Name</td>
<td><input type=\"text\" name=\"artistName\"></td>
</tr>
<tr>
<td>Artist Info</td>
<td><input type=\"text\" name=\"artistInfo\"></td>
</tr>
<tr>
<td>Artist Picture</td>
<td><input type=\"text\" name=\"artistPicture\"></td>
</tr>
<tr>
<td><input type=\"submit\" name=\"submit\"></td>
</tr>
</table>
</form>
<form action=\"deleteEntry.php\">
<input type=\"hidden\" name=\"id\" value=\"$_GET[id]\">
<input type=\"submit\" value=\"Delete\"></form>";
echo "<p><a href=\"index.php\">back</a></p>" ?>