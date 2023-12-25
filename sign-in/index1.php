<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['Uname'];
    $email = $_POST['Email'];
    $password = ($_POST['Password']); 

    $server = "localhost";
    $dbUser = "root";
    $dbPassword = "";
    $dbName = "flora";

    $con = new mysqli($server, $dbUser, $dbPassword, $dbName);

    if ($con->connect_error) {
        die("Error: " . $con->connect_error);
    }

    $query="INSERT INTO sign (name,  email, password)
            VALUES( '$username', '$email', '$password')";

        if($con->query($query)==true)
        {
            header("Location: ../flora.html");
        }else 
        {
            die("details ".$con->error);
        }
}
?>