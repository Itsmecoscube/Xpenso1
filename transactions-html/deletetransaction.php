<?php
$item_id = $_POST['TID'];


$mysqli = new mysqli('localhost', 'root', '', 'xpenso');
if ($mysqli->connect_error) {
    die('Connection Failed: ' . $mysqli->connect_error);
} else {
    session_start();
    $email = $_SESSION['user_name'];
    $query = "SELECT amount FROM Transaction join performs on TID=Transaction_ID WHERE Emailperforms='$email' and TID = $item_id";
        $result = mysqli_query($mysqli,$query);
        $row = $result->fetch_assoc();
        $deletedamount = $row['amount']; //Get amount that is to be deleted;

   $query = "SELECT * FROM Transaction join performs on TID=Transaction_ID where TID = '$item_id' AND Emailperforms = '$email'";
   $result = mysqli_query($mysqli,$query);
    if (mysqli_num_rows($result)==1) {
        
        $row = $result->fetch_assoc();
        $category = $row['category'];
        $stmt = $mysqli->prepare("update budget set Spent_amount = (select sum(amount) from Transaction join performs on TID=Transaction_ID where category='$category' and Emailperforms='$email' and Type='Debit')-$deletedamount where category='$category'");
        $stmt->execute();
        $stmt->close();

        $query = "SELECT Total_amount FROM Budget join keeps on BID = Budget_ID where Emailkeeps='$email' and category='$category'";
        $result = mysqli_query($mysqli,$query);
        $row = $result->fetch_assoc();
        $amount = $row['Total_amount'];

        $query = "SELECT amount FROM Transaction join performs on TID=Transaction_ID WHERE Emailperforms='$email' and TID = $item_id";
        $result = mysqli_query($mysqli,$query);
        $row = $result->fetch_assoc();
        $deletedamount = $row['amount'];

        //Remaining: Delete Transaction of type Credit

    $stmt = $mysqli->prepare("delete from transaction where TID = '$item_id'");
        $stmt->execute();
        $stmt->close();
        header('Location: index1.php?error=Transaction Deleted Successfully!');
    }
    else
    {
        header("Location:index1.php?error=Transaction Not Found");
    }
    $mysqli->close();
}
?>