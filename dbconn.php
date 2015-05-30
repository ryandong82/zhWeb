<?php
$conn = mysql_connect("localhost", "root", "dr820428");
if (!$conn) {
die('Could not connect: ' . mysql_error());
}
mysql_query("SET NAMES 'UTF8'");
mysql_query("SET CHARACTER SET UTF8");
mysql_query("SET CHARACTER_SET_RESULTS=UTF8'");
$db_selected = mysql_select_db("zhweb", $conn);
?>