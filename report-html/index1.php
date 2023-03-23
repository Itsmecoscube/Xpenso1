<?php session_start(); 
if(!isset($_SESSION['user_name']))
header("Location:../login.php");
?>
<html>
<title>Xpenso | Transactions</title>
<link rel="icon" href="../public/playground_assets/Logo.png" type="image/x-icon">

<head>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        data-tag="font" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        data-tag="font" />
    <link rel="stylesheet" href="index1.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="https://kit.fontawesome.com/2291efdc8d.js" crossorigin="anonymous"></script>
    <style>
    .progressbar{
        border-radius: 10px;
        color:black;
        background: greenyellow;
    }
    .Progress p{
        font-size: 13;
    }
    button{
            cursor:pointer;
        }
    .menu-button1 {
  width: 130px;
  height: 40px;
  background-color: #aeff83;
  border-radius: 10px;
  border-color: #f5f5fb;
  transition: 0.3s;
  align-items: center;
}
.menu-button1:hover{
    background-color: greenyellow;
    width:140px;
    height:45px;
}
.add-transaction-button{
  background-color: #4ad400;
  width: 200px; 
  height:40px;
  font-weight: 700;
  font-size: large;
  font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  transition: 0.3s;
}
.add-transaction-button:hover{
    background-color: darkgreen;
    width:210px;
    height:45px;
}
</style>
    <!---->

</head>

<body class="body">

    <div class="reminders-page">

        <!-- Right Division-->
        <div class="reminders-page-right">

            <div class="profile">

                <?php
                $conn = new mysqli('localhost', 'root', '', 'safespend-2');
                if ($conn->connect_error) {
                    die('Connection Failed: ' . $conn->connect_error);
                } else {
                    $var = $_SESSION['user_name'];
                    $sql = "SELECT profile_pic_url FROM user where email='$var'";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($images = mysqli_fetch_assoc($result)) {


                ?>
                <img src="../uploads/<?= $images['profile_pic_url'] ?>" class="profilephoto1" style="width: 50px; border:solid black;border-radius:25px;position:relative;top:15px;">

                <?php
                        }
                    }
                }
                ?>
                <div class="username">
                    <?php

                    $var = $_SESSION['name'];
                    ?>
                    <p>
                        <?= $var ?>
                    </p>
                </div>
            </div>
            <div class="Progress">
                <span>Progress</span>
                <?php
                $var = $_SESSION['user_name'];
                $sql = "SELECT * from Budget join keeps on BID=Budget_ID where emailkeeps='$var'";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0){
                    while( $row = mysqli_fetch_assoc($result)){
                        $spentamt = $row['Spent_amount'];
                        $totalamt = $row['Total_amount'];
                        $category = $row['category'];
                        if($totalamt!=0)
                        $percentage = (float) $spentamt / (float) $totalamt * 100;
                        else
                            $percentage = 0;
                        $percentage = round($percentage, 2);
                        if($spentamt>$totalamt)
                        {
                            echo '<p style="color:red;">Budget_for_'.$category.'_exceeded '.$percentage.'% Used</p>';
                        } else {
                            echo  '<p style="color:green;"> '. $row['category'] .'<br>'. $percentage .'%<br>';
                            echo '<progress class="progressbar" value="' . $spentamt . '" max="' . $totalamt . '"></progress>';
                        }
                    }
                }
                ?>
            </div>
            <div class="Reminders">
                <span></span>
            </div>

            <div class="add-transaction">
                <a href="../addtran.php"><button type="button" class="add-transaction-button">
                        <i class="fa-solid fa-plus"></i> Add Transaction
                    </button></a>
            </div>
        </div>

        <!-- Left Division-->
        <div class="reminders-page-left">
            <!-- Logo -->
            <div class="brand">
                <img src="../public/playground_assets/Logo.png" class="Logo">

                <div class="brand-text">
                    <span class="brand-text1">X</span>
                    <span class="brand-text2">pens</span>
                    <span class="brand-text3">O</span>
                </div>

            </div>
            <div class="reminders-page-left-menu">
                <span class="reminders-page-text1"><a href="../transactions-html/index1.php"><button
                            class="menu-button1" ><span
                                class="menutext">Transactions</span></button></a></span>
                <span class="reminders-page-text2"><a href="../budget-html/index1.php"><button
                            class="menu-button1"><span class="menutext">Budgets</span></button></a></span>
                <span class="reminders-page-text3"><a href="../report-html/index1.php"><button
                            class="menu-button1" style="background-color:#65f9c5;"><span class="menutext">Report</span></button></a></span>
                <span class="reminders-page-text4"><a href="../activities-html/index1.php"><button
                            class="menu-button1"><span class="menutext">Activities</span></button></a></span>
                <span class="reminders-page-text5"><a href="../reminders-html/index1.php"><button
                            class="menu-button1"><span class="menutext">
                                <x>Reminders<x>
                            </span></button></a></span>
                <span class="reminders-page-text6"><a href="../educate-html/index1.php"><button
                            class="menu-button1"><span class="menutext">Educate</span></button></a></span>
                <span class="reminders-page-text7"><a href="../help-html/index1.php"><button class="menu-button1"><span
                                class="menutext">Help</span></button></a></span>
                                <span class="reminders-page-text8"><a href="../shopping-html/index1.php"><button class="menu-button1"><span
                                class="menutext">Shopping List</span></button></a></span>

                <div style="position: relative; top:670px; left:20px;"><a href="../register.php"><span
                            style="color: red; font-size: 20; ">Log Out</span></a></div>
            </div>
        </div>
         <div class="searchbar">
            <form>
                <input type="text" class="" id="myInput" style="border: 20px;width:160px;" onkeyup="myFunction()"
                    placeholder="Search for a Category...">
            </form>
            <img src="../public/playground_assets/search.svg" class="Searchicon">
        </div>
        <!-- Mid Division-->
        
        <div class="reminders-page-middle">
        <h1>Report</h1>
            <?php
            $mysqli = new mysqli('localhost', 'root', '', 'safespend-2');
            $var = $_SESSION['user_name'];
            $array = array();
            $array["General"]['total_amount'] = 0;
            $array["Transport"]['total_amount'] = 0;
            $array["Food"]['total_amount'] = 0;
            $array["Shopping"]['total_amount'] = 0;
            $array["Rent"]['total_amount'] = 0;
            $array["Petrol"]['total_amount'] = 0;
            $array["Medicine"]['total_amount'] = 0;
            $array["Entertainment"]['total_amount'] = 0;
            $query = "SELECT category, sum(amount) as total_amount FROM transaction join performs on TID = Transaction_ID where Emailperforms = '$var' and Type = 'Debit' group by category ";
            if ($result = $mysqli->query($query)) {
                while ($row = $result->fetch_assoc()) {
                    $category = $row["category"];
                    $array[$category] = $row;
                }
                //IF You add new categories, add it here

                $reqarray = array($array["General"]['total_amount'], $array["Transport"]['total_amount'], $array["Food"]['total_amount'], $array["Shopping"]['total_amount'], $array["Rent"]['total_amount'], $array["Petrol"]['total_amount'], $array["Medicine"]['total_amount'], $array["Entertainment"]['total_amount']);
                
            }
            ?>
            <div style="margin:auto;">
                <canvas id="myChart" style="width:100%; max-width:600px;"></canvas>
                <script>
                    var xValues = ["General", "Transport", "Food","Shopping","Rent","Petrol","Medicine","Entertainment"];

                    var yValues = <?php echo '["' .implode('", "', $reqarray). '"]' ?>;
                    var barColors = ["#b91d47", "#00aba9", "#2b5797", "#e8c3b9", "#1e7145", "#f7de3f", "#FF5733", "#FFC300" ];
                    new Chart("myChart", {
                        type: "pie",
                        data: {
                            labels: xValues,
                            datasets: [
                                {
                                    backgroundColor: barColors,
                                    data: yValues,
                                },
                            ],
                        },
                        options: {
                            title: {
                                display: true,
                                text: "Categories",
                            },
                        },
                    });

                </script>
            </div>
            <br><br>
            <div>

                <canvas id="myChart2" style="width:100%;max-width:600px"></canvas>
                <?php
            $array = array();
            $query = "SELECT Date, sum(amount) as total_amount FROM transaction join performs on TID = Transaction_ID where Emailperforms = '$var' and Type = 'Debit' group by Date ";
            if ($result = $mysqli->query($query)) {
                while ($row = $result->fetch_assoc()) {
                    $array[] = $row;
                }
            }
            ?>
                <script>
                    var xValues = 
                    <?php 
                    $i = 0;
                    for ($i = 0; $i < count($array) ; $i++)
                        $reqarray1[$i] = $array[$i]['Date'];
                    echo '["' .implode('", "', $reqarray1). '"]';
                    ?>;

                    var yValues = 
                    <?php 
                    $i = 0;
                    for ($i = 0; $i < count($array) ; $i++)
                        $reqarray2[$i] = $array[$i]['total_amount'];
                    echo '["' .implode('", "', $reqarray2). '"]';
                    ?>;

                    new Chart("myChart2", {
                        type: "line",
                        data: {
                            labels: xValues,
                            datasets: [{
                                fill: false,
                                lineTension: 0,
                                backgroundColor: "rgba(0,0,255,1.0)",
                                borderColor: "rgba(0,0,255,0.1)",
                                data: yValues,
                            }]
                        },
                        options: {
                            legend: { display: false },
                            scales: {
                                yAxes: [{ ticks: { min: 0, max: 6000 } }],
                            }
                        }
                    });
                </script>
            </div>
            
        </div>
    </div>
</body>

</html>