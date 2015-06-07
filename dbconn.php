<?php
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);
$pdo = new PDO("mysql:host=localhost;dbname=zhweb","zhweb","dr820428",$options);
include('log4php/Logger.php');
Logger::configure($_SERVER['DOCUMENT_ROOT']  ."/config_log.xml");
$log = Logger::getLogger('myLogger');

?>