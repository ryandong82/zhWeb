<?php
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);
$pdo = new PDO("mysql:host=localhost;dbname=zhweb","zhweb","dr820428",$options);
$conn = mysql_connect("localhost", "zhweb", "dr820428");
if (!$conn) {
die('Could not connect: ' . mysql_error());
}
mysql_query("SET NAMES utf8");
//mysql_query("SET CHARACTER SET UTF8");
//mysql_query("SET CHARACTER_SET_RESULTS=UTF8'");
$db_selected = mysql_select_db("zhweb", $conn);

include('log4php/Logger.php');
Logger::configure($_SERVER['DOCUMENT_ROOT']  ."/config_log.xml");
$log = Logger::getLogger('myLogger');

?>