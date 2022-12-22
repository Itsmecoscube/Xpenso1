<?php
$BID = $_POST['BID'];


$mysqli = new mysqli('localhost', 'root', '', 'xpenso');
if ($mysqli->connect_error) {
    die('Connection Failed: ' . $mysqli->connect_error);
} else {
    session_start();
    $email = $_SESSION['user_name'];
   $query = "SELECT * FROM Budget join keeps on BID=Budget_ID where BID=$BID AND Emailkeeps = '$email'";
   $result = mysqli_query($mysqli,$query);
    if (mysqli_num_rows($result)==1) {
        $stmt = $mysqli->prepare("delete from Budget where BID = $BID");
        $stmt->execute();
        $stmt->close();
        header('Location: index1.php?error=Budget Deleted Successfully!');
    }
    else
    {
        header("Location:index1.php?error=Budget ID Not Found");
    }
    $mysqli->close();
}
?>