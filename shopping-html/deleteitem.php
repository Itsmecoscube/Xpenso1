<?php
$item_id = $_POST['deleteitem'];


$mysqli = new mysqli('localhost', 'root', '', 'xpenso');
if ($mysqli->connect_error) {
    die('Connection Failed: ' . $mysqli->connect_error);
} else {
    session_start();
    $email = $_SESSION['user_name'];
   $query = "SELECT * FROM shopping natural join creates where item_ID = '$item_id' AND Email = '$email'";
   $result = mysqli_query($mysqli,$query);
    if (mysqli_num_rows($result)==1) {
        $stmt = $mysqli->prepare("delete from shopping where item_ID = '$item_id'");
        $stmt->execute();
        $stmt->close();
        header('Location: index1.php?error=Item Deleted Successfully!');
    }
    else
    {
        header("Location:index1.php?error=Item Not Found");
    }
    $mysqli->close();
}
?>