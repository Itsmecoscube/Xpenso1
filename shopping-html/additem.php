<?php
$item_id = $_POST['item_id'];
$mode = $_POST['mode-of-payment'];
$type = $_POST['transaction-type'];

$mysqli = new mysqli('localhost', 'root', '', 'safespend-2');
if ($mysqli->connect_error) {
    die('Connection Failed: ' . $mysqli->connect_error);
} else {
    session_start();
    $email = $_SESSION['user_name'];
    $query = "SELECT * FROM shopping natural join creates where item_ID = '$item_id' AND Email = '$email'";
    $result = $mysqli->query($query);
    if (mysqli_num_rows($result)==0)
        header("Location:index1.php?error=Item Not Found");
    $row = $result->fetch_assoc();
    $category = $row['item_cat'];
    $qty = (int)$row['quantity'];
    $amount = (int)$row['item_price'];
    $amount = $amount * $qty;

    $query = "SELECT max(TID) FROM transaction";
    if ($result = $mysqli->query($query)) {
        if ($row = $result->fetch_assoc()) {
            $TID = $row['max(TID)'];
            $TID = $TID + 1;
        } else {
            $TID = 1;
        }
    }
    $stmt = $mysqli->prepare("delete from shopping where item_ID = '$item_id'");
        $stmt->execute();
        $stmt->close();
    $stmt = $mysqli->prepare("insert into transaction (TID,Mode,Type,Amount,category) values(?,?,?,?,?)");
    $stmt->bind_param("issis", $TID, $mode, $type, $amount, $category);
    $stmt->execute();
    $stmt->close();

    $query = "SELECT BID,Total_amount,Spent_amount from budget join keeps on BID=Budget_ID where category='$category' and Emailkeeps='$email' ";
    $result = $mysqli->query($query);
    if ($row = $result->fetch_assoc()) {
        $spent_amount = $row['Spent_amount'];
        $total_amount = $row['Total_amount'];
        $BID = $row['BID'];
        if ($type == 'Credit') {
            $total_amount += $amount;
            $stmt2 = $mysqli->prepare("update budget set total_amount=$total_amount where category='$category' and BID='$BID'");
        }
        else {
            $spent_amount += $amount;
            $stmt2 = $mysqli->prepare("update budget set spent_amount=$spent_amount where category='$category' and BID='$BID'");
        }
        $stmt2->execute();
        $stmt2->close();
    }

    $stmt = $mysqli->prepare("insert into performs (Emailperforms,Transaction_ID) values(?,?)");
    $stmt->bind_param("si", $email, $TID);
    $stmt->execute();
    $stmt->close();

    $mysqli->close();
    header('Location: index1.php?error=Item Added Successfully');
}
?>