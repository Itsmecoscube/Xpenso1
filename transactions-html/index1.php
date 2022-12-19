<?php session_start(); ?>
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

    <!---->

</head>

<body class="body">

    <div class="reminders-page">

        <!-- Right Division-->
        <div class="reminders-page-right">

            <div class="profile">

                <?php
                $conn = new mysqli('localhost', 'root', '', 'xpenso');
                if ($conn->connect_error) {
                    die('Connection Failed: ' . $conn->connect_error);
                } else {
                    $var = $_SESSION['user_name'];
                    $sql = "SELECT profile_pic_url FROM user where email='$var'";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($images = mysqli_fetch_assoc($result)) {


                ?>
                <img src="../uploads/<?= $images['profile_pic_url'] ?>" class="profilephoto1" style="width: 50px;">

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
                <span class="">Progress</span>
            </div>
            <div class="Reminders">
                <span>Reminders</span>
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
                            class="menu-button1" style="background-color:#65f9c5;"><span
                                class="menutext">Transactions</span></button></a></span>
                <span class="reminders-page-text2"><a href="../budget-html/index1.php"><button
                            class="menu-button1"><span class="menutext">Budgets</span></button></a></span>
                <span class="reminders-page-text3"><a href="../report-html/index1.php"><button
                            class="menu-button1"><span class="menutext">Report</span></button></a></span>
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

                <div style="position: relative; top:620px; left:20px;"><a href="../register.php"><span
                            style="color: red; font-size: 20; ">Log Out</span></a></div>
            </div>
        </div>
        <div class="searchbar">
            <form>
                <input type="text" class="" id="myInput" style="border: 20px;" onkeyup="myFunction()"
                    placeholder="Search for a Category...">
            </form>
            <img src="../public/playground_assets/search.svg" class="Searchicon">
        </div>
        <!-- Mid Division-->
        <script>
        function myFunction() {
            //Declare variables
            var input, filter, table, tr, td, i, txtvalue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");

            //loop through all table rows and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[5];
                if (td) {
                    txtvalue = td.textContent || td.innerText;
                    if (txtvalue.toLocaleUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
        <div class="reminders-page-middle">

            <h1>Transactions</h1>
            <div class="transactions-table">
                <table border="5" cellspacing="2" cellpadding="2" width="70%" margin="auto" id="myTable" style="border:5px solid black; border-radius:10px;">
                    <tr height="60px" class="header">
                        <th bgcolor="#AEF28A">
                            <font face="Arial">Transaction ID</font>
                        </th>
                        <th bgcolor="#AEF28A" width="20%">
                            <font face="Arial">Amount</font>
                        </th>
                        <th bgcolor="#AEF28A" width="22%">
                            <font face="Arial">Mode of Payment</font>
                        </th>
                        <th bgcolor="#AEF28A" width="25%">
                            <font face="Arial">Date</font>
                        </th>
                        <th bgcolor="#AEF28A" width="25%">
                            <font face="Arial">Time</font>
                        </th>
                        <th bgcolor="#AEF28A">
                            <font face="Arial">Category</font>
                        </th>
                        <th bgcolor="#AEF28A">
                            <font face="Arial">Type</font>
                        </th>
                    </tr>
                    <?php include 'print-transactions.php'; ?>
            </div>

        </div>
    </div>
</body>

</html>