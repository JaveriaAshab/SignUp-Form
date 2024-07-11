<?php 
$servername = "localhost";
$username = "root";
$password = "";
$databaseName = "form2";

$connection = new mysqli ($servername, $username, $password, $databaseName);

if ($connection->connect_error) {
    die("Connection Failed: " .$connection->$connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $salary = $_POST['salary'];
    $joiningDate = $_POST['joiningDate'];

    $sql = "INSERT INTO form2Table (username, email, contact, salary, Joining_Date) values ('$username', '$email', '$contact', '$salary', '$joiningDate')";

    if ($connection->query($sql) == true) {
        echo "SignUp Successful.";
    }
    else{
        echo "Error: " . $sql . "<br>" . $connection->error;
    }
}

$connection->close();
?>