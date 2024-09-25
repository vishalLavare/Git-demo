<?php
$host = 'localhost'; // your server
$dbname = 'insta'; // your database name
#$username = 'root'; // your database username
#$password = ''; // your database password

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>
