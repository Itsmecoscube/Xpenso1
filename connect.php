<?php
    $amount = $_POST['amount'];
    $mode = $_POST['mode-of-payment'];
    $type = $_POST['transaction-type'];

    $mysqli = new mysqli('localhost','root','','xpenso');
    if ($mysqli->connect_error){
        die('Connection Failed: '.$mysqli->connect_error);
    }
    else{
        session_start();
        $email = $_SESSION['user_name'];
        $query = "SELECT max(TID) FROM transaction";
        if($result= $mysqli->query($query)){
        if($row = $result->fetch_assoc()){
        $TID = $row['max(TID)'];
        $TID=$TID+1;
    }
        else{$TID=1;}
        }
        $stmt = $mysqli->prepare("insert into transaction (TID,Mode,Type,Amount) values(?,?,?,?)");
        $stmt->bind_param("issi",$TID,$mode,$type,$amount);
        $stmt->execute();
        $stmt->close();

        $stmt = $mysqli->prepare("insert into performs (Emailperforms,Transaction_ID) values(?,?)");
        $stmt->bind_param("si",$email,$TID);
        $stmt->execute();
        $stmt->close();

        $mysqli->close();
        header('Location: transactions-html/index1.php');
    }
?>