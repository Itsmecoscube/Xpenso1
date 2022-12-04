<?php

session_start();

$sname = "localhost";

$unmae = "root";

$password = "";

$db_name = "xpenso";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";
}

if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data)
    {

        $data = trim($data);

        $data = stripslashes($data);

        $data = htmlspecialchars($data);

        return $data;
    }

    $uname = validate($_POST['uname']);

    $pass = validate($_POST['password']);

    if (empty($uname)) {

        header("Location: login.php?error=User Name is required");

        exit();
    } else if (empty($pass)) {

        header("Location: login.php?error=Password is required");

        exit();
    } else {

        $sql = "SELECT * FROM user WHERE Email='$uname' AND PASSWORD='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['Email'] === $uname && $row['PASSWORD'] === $pass) {

                echo "Logged in!";

                $_SESSION['user_name'] = $row['Email'];
                $_SESSION['mobileno'] = $row['Mobile_no'];

                $_SESSION['name'] = $row['Name'];

                $_SESSION['id'] = $row['Email'];

                header("Location: transactions-html/index1.php");

                exit();
            }else{

                header("Location: login.php?error=Incorect User name or password");

                exit();
            }
        } else {

            header("Location: login.php?error=Incorect User name or password");

            exit();
        }
    }
} else {

    header("Location: transactions-html/index1.php");

    exit();
}
