<?php
$amount = $_POST['amount'];
$category = $_POST['category'];

$mysqli = new mysqli('localhost', 'root', '', 'xpenso');
if ($mysqli->connect_error) {
    die('Connection Failed: ' . $mysqli->connect_error);
} else {
    session_start();
    $email = $_SESSION['user_name'];
    $query = "SELECT max(BID) FROM budget";
    if ($result = $mysqli->query($query)) {
        if ($row = $result->fetch_assoc()) {
            $BID = $row['max(BID)'];
            $BID = $BID + 1;
        } else {
            $BID = 1;
        }
    }
    $stmt = $mysqli->prepare("insert into budget (BID,Total_amount,category) values(?,?,?)");
    $stmt->bind_param("iis", $BID, $amount, $category);
    $stmt->execute();
    $stmt->close();


    $stmt = $mysqli->prepare("insert into keeps (Emailkeeps,Budget_ID) values(?,?)");
    $stmt->bind_param("si", $email, $BID);
    $stmt->execute();
    $stmt->close();

    $mysqli->close();
    header('Location: budget-html/index1.php');
}
?>