<?php
$db_host = 'host';
$db_user = 'name';
$db_pass = 'pass';
$db_database = 'db';

$db = new mysqli($db_host, $db_user, $db_pass, $db_database);

if ($db->connect_error) {
    die('Не могу установить соединение с базой данных: ' . $db->connect_error);
}

$db->set_charset("utf8");

?>