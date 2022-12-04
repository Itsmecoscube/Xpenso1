<html>
<title>Transactions</title>
<link rel="icon" href="../public/playground_assets/Logo.png" type="image/x-icon">

<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" data-tag="font" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" data-tag="font" />
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
                <img src="../public/playground_assets/profile.png" class="profilephoto">
                <div class="username">
                    <?php
                    session_start();
                    $var = $_SESSION['name'];
                    ?>
                    <p><?= $var ?></p>
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
                <span class="reminders-page-text1"><a href="../transactions-html/index1.php"><button class="menu-button1"><span class="menutext">Transactions</span></button></a></span>
                <span class="reminders-page-text2"><a href="../budget-html/index1.php"><button class="menu-button1"><span class="menutext">Budgets</span></button></a></span>
                <span class="reminders-page-text3"><a href="../report-html/index1.php"><button class="menu-button1"><span class="menutext">Report</span></button></a></span>
                <span class="reminders-page-text4"><a href="../activities-html/index1.php"><button class="menu-button1"><span class="menutext">Activities</span></button></a></span>
                <span class="reminders-page-text5"><a href="../reminders-html/index1.php"><button class="menu-button1"><span class="menutext">
                                <x>Reminders<x>
                            </span></button></a></span>
                <span class="reminders-page-text6"><a href="../educate-html/index1.php"><button class="menu-button1"><span class="menutext">Educate</span></button></a></span>
                <span class="reminders-page-text7"><a href="../help-html/index1.php"><button class="menu-button1"><span class="menutext">Help</span></button></a></span>
            </div>
        </div>
        <div class="searchbar">
            <form>
                <input type="search" placeholder="  Search" name="search" style="border: 20px;">
            </form>
            <img src="../public/playground_assets/search.svg" class="Searchicon">
        </div>
        <!-- Mid Division-->
        <div class="reminders-page-middle">

            <h1>Transactions</h1>
            <div>
                <table width="75%" border="0" cellpadding="6" class="transaction-table">
                    <th class="transaction-header">LAST MONTH</th>
                    <th class="transaction-header">THIS MONTH</th>
                    <th class="transaction-header">FUTURE </th>
                    <tr align="center">
                        <td class="transaction-data">Inflow</td>
                        <td class="transaction-data"></td>
                        <td class="transaction-data" style="color: green;">$14000</td>
                    </tr>
                    <tr align="center">
                        <td class="transaction-data">Outflow</td>
                        <td></td>
                        <td class="transaction-data" style="color: red;">$8000</td>
                    </tr>
                    <tr align="center">
                        <td class="transaction-data">Available</td>
                        <td></td>
                        <td class="transaction-data" style="color:darkgoldenrod">$6000</td>
                    </tr>
                </table>
                
            </div>
            <div class="transactions-table">
                <?php include 'print-transactions.php'; ?>
                </div>
                <!--
            <div style="margin:auto;">
                    <canvas id="myChart" style="width:100%; max-width:600px; margin:auto;"></canvas>
                    <script src="piechart.js"></script>
                </div>
-->
        </div>
    </div>
</body>

</html>