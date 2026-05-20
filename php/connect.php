<!-- <?php
$host = 'mydb.cj44mq6wimjt.ap-southeast-1.rds.amazonaws.com';
$username = 'root';
$password = 'root';
$dbname = 'PatientCareSystem';

$conn = new mysqli($host, $username, $password, $dbname, 3306);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?> -->

<?php
$host = getenv('DB_HOST');
$username = getenv('DB_USER');
$password = getenv('DB_PASSWORD');
$dbname = getenv('DB_NAME');

$conn = new mysqli($host, $username, $password, $dbname, 3306);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
