<?php
session_start();
$mysqli = new mysqli('localhost', 'root', '', 'safespend-2');
if (isset($_POST['shopping_delete_multiple_btn'])) {
    if (isset($_POST['shopping_delete_id'])) {
        $all_id = $_POST['shopping_delete_id'];
        $extract_id = implode(',', $all_id);
        print_r($extract_id);
        $counts = 0;
        $countf = 0;

        $email = $_SESSION['user_name'];
        foreach ($all_id as $item_id) {

            $query = "SELECT * FROM shopping natural join creates where item_ID = '$item_id' AND Email = '$email'";
            $result = mysqli_query($mysqli, $query);
            if (mysqli_num_rows($result) == 1) {
                $stmt = $mysqli->prepare("delete from shopping where item_ID = '$item_id'");
                $stmt->execute();
                $stmt->close();
                $counts++;
            } else {
                $countf++;
            }
            $mysqli->close();

            header("Location:index1.php?error=$counts queries Successful , $countf queries unsuccessful");
        }
    }
    header("Location:index1.php?error=No Items Selected");
}
?>