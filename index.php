<?php
$dsn = 'mysql:host=localhost;port=3307;dbname=test_connection';
$user = 'root';
$pass = '';
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);
try {
    $db_connection = new PDO($dsn, $user, $pass, $options);
    $sql = "INSERT INTO `students`(`first_name`, `last_name`, `gpa`, `level`) VALUES ('Khader','Karaja','95','4')";
    $db_connection->prepare($sql)->execute();
    echo 'Connect & Insert Successfully ^_^';
} catch (PDOException $e) {
    echo 'Failed To Connect => Error Code: ' . $e->getCode() . '  Error Message: ' . $e->getMessage();
}