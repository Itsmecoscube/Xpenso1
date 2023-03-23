<?php
session_start();
$mysqli = new mysqli('localhost', 'root', '', 'safespend-2');
if(isset($_POST['budget_delete_multiple_btn']))
{
    if (isset($_POST['budget_delete_id'])) {
        $all_id = $_POST['budget_delete_id'];
        $extract_id = implode(',', $all_id);
        print_r($extract_id);
        $counts = 0;
        $countf = 0;

        $email = $_SESSION['user_name'];
        foreach ($all_id as $BID) {
            $query = "SELECT * FROM Budget join keeps on BID=Budget_ID where BID=$BID AND Emailkeeps = '$email'";
            $result = mysqli_query($mysqli, $query);
            if (mysqli_num_rows($result) == 1) {
                $stmt = $mysqli->prepare("delete from Budget where BID = $BID");
                $stmt->execute();
                $stmt->close();
                $counts++;
            } else {
                $countf++;
            }
        }
        $mysqli->close();

        header("Location:index1.php?error=$counts queries Successful , $countf queries unsuccessful");
    }
    header("Location:index1.php?error=No Records Selected");

}
?>