<?php
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $phone = $_POST["number"];
    $password = $_POST["password"];

    // databse connection 
    $conn = new mysqli('localhost' ,'root','','a_pvt_ltd');
    if ($conn->connect_error) {
        die('connection error: ' . $conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into abregister(firstname,lastname,phone,email,password) values(?,?,?,?,?)");
        $stmt->bind_param("ssiss",$firstname,$lastname,$phone,$email,$password);
        $stmt->execute();
        echo"register successfully";
        $stmt->close();
        $conn->close();
    }

?>