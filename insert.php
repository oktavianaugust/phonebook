<?php
$servername = "test.local";
$username = "root";
$password = "";
$dbname = "phonebook";

$name = $_POST['name'];
$surname = $_POST['surname'];
$family_name = $_POST['family name'];
$birth = $_POST['birth'];
$phone = $_POST['phone'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO person (name, surname, family_name,  birth)
  VALUES ('".$name."', '".$surname."', '".$family_name."', '".$birth." 00:00:00')";
    $sql = "INSERT INTO phone (phone)
  VALUES ('".$phone."')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

?>

<a href='/Index.php?page=1'> На главную</a>


