<?php

$amount = $_POST['amount'];
$datetime = $_POST['datetime'];
$description =$_POST['description'];
$id = 1;
$mysqli = new mysqli('localhost', 'root', '', 'safespend-2');
if ($mysqli->connect_error) {
    die('Connection Failed: ' . $mysqli->connect_error);
} else {
    session_start();
    $email = $_SESSION['user_name'];
   $query = "SELECT max(id) FROM reminder";
    if ($result = $mysqli->query($query)) {
        if ($row = $result->fetch_assoc()) {
            $id = $row['max(id)'];
            $id = $id + 1;
        } else {
            $id = 1;
        }
    }
    $stmt = $mysqli->prepare("insert into reminder (id,amount,datetime,description) values(?,?,?,?)");
    $stmt->bind_param("iiss", $id,$amount,$datetime,$description);
    $stmt->execute();
    $stmt->close();

    $stmt = $mysqli->prepare("insert into sets (Email,id) values(?,?)");
    $stmt->bind_param("si", $email, $id);
    $stmt->execute();
    $stmt->close();
    
    $mysqli->close();
    header('Location: index1.php');
}
?>