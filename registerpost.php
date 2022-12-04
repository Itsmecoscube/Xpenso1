<?php
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $name = $_POST['name'];
    $mobileno = $_POST['mobileno'];
    $age = $_POST['age'];

    $conn = new mysqli('localhost','root','','xpenso');
    if ($conn->connect_error){
        die('Connection Failed: '.$conn->connect_error);
    }
    else{
        $sql = "SELECT * FROM user WHERE Email='$email'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) === 1)
        header('Location: login.php');

        $stmt = $conn->prepare("insert into user (Email,Name,Mobile_no,Age,PASSWORD) values(?,?,?,?,?)"); //
        $stmt->bind_param("ssiis",$email,$name,$mobileno,$age,$password);
        $stmt->execute();
        $stmt->close();
        $conn->close();
        header('Location: login.php');
    }
?>