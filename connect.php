<?php
$amount = $_POST['amount'];
$mode = $_POST['mode-of-payment'];
$type = $_POST['transaction-type'];
$category = $_POST['category'];

$mysqli = new mysqli('localhost', 'root', '', 'xpenso');
if ($mysqli->connect_error) {
    die('Connection Failed: ' . $mysqli->connect_error);
} else {
    session_start();
    $email = $_SESSION['user_name'];
    $query = "SELECT max(TID) FROM transaction";
    if ($result = $mysqli->query($query)) {
        if ($row = $result->fetch_assoc()) {
            $TID = $row['max(TID)'];
            $TID = $TID + 1;
        } else {
            $TID = 1;
        }
    }
    $stmt = $mysqli->prepare("insert into transaction (TID,Mode,Type,Amount,category) values(?,?,?,?,?)");
    $stmt->bind_param("issis", $TID, $mode, $type, $amount, $category);
    $stmt->execute();
    $stmt->close();

    $query = "SELECT BID,Total_amount,Spent_amount from budget where category='$category'";
    $result = $mysqli->query($query);
    if ($row = $result->fetch_assoc()) {
        $spent_amount = $row['Spent_amount'];
        $total_amount = $row['Total_amount'];
        if ($type == 'Credit') {
            $total_amount += $amount;
            $stmt2 = $mysqli->prepare("update budget set total_amount=$total_amount where category='$category'");
        }
        else {
            $spent_amount += $amount;
            $stmt2 = $mysqli->prepare("update budget set spent_amount=$spent_amount where category='$category'");
        }
        $stmt2->execute();
        $stmt2->close();
    }

    $stmt = $mysqli->prepare("insert into performs (Emailperforms,Transaction_ID) values(?,?)");
    $stmt->bind_param("si", $email, $TID);
    $stmt->execute();
    $stmt->close();

    $mysqli->close();
    header('Location: transactions-html/index1.php');
}
?>