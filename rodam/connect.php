<?php
$host = "localhost";
$user = "root";
$pw = "assa2589!@";
$dbName = "rodam";
$conn = mysqli_connect($host, $user, $pw, $dbName);

mysqli_set_charset($conn, 'utf8');

header('Content-Type: text/html; charset=UTF-8'); // 한글깨질때 사용
?>