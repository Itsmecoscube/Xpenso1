<?php session_start(); 
if(!isset($_SESSION['user_name']))
header("Location:../login.php");
?>
<html>
<title>Xpenso | Help</title>
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
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css">
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <!---->
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
<img src="../uploads/<?= $images['profile_pic_url'] ?>" class="profilephoto1" style="width: 55px; border:solid black;border-radius:25px;position:relative;top:15px;">

<?php
        }
    }
}
?>
                <div class="username">
                    <?php
                    $var = $_SESSION['name'];
                    ?>
                    <p style="position:relative; top:17px;">
                        <?= $var ?>
                    </p>
                </div>
            </div>
            <div class="Progress-Reminders">
                <span class="">Progress</span>
            </div>
            <div class="Reminders">
                <span>Reminders</span>
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
                            class="menu-button1"><span class="menutext">Transactions</span></button></a></span>
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
                <span class="reminders-page-text7"><a href="../help-html/index1.php"><button class="menu-button1" style="background-color:#65f9c5;"><span
                                class="menutext">Help</span></button></a></span>
                                <span class="reminders-page-text8"><a href="../shopping-html/index1.php"><button class="menu-button1"><span
                                class="menutext">Shopping List</span></button></a></span>
                                <div style="position: relative; top:670px; left:20px;"><a href="../register.php"><span style="color: red; font-size: 20; ">Log Out</span></a></div>
            </div>
        </div>
        <div class="searchbar">
            <form>
                <input type="search" placeholder="  Search" name="search" style="border: 20px; width:160px;">
            </form>
            <img src="../public/playground_assets/search.svg" class="Searchicon">
        </div>
        <!-- Mid Division-->
        <div class="reminders-page-middle">
            <div class="FAQ">
                <div class="text-center">
                    <h2 class="mt-5 mb-5">FAQ</h2>
                </div>
                <section class="container my-5" id="maincontent">
                    <section id="accordion">
                        <a class="py-3 d-block h-15 w-100 position-relative z-index-1 pr-1 text-secondary border-top"
                            aria-controls="faq-17" aria-expanded="false" data-toggle="collapse" href="#faq-17"
                            role="button">
                            <div class="position-relative">
                                <h2 class="h4 m-0 pr-3">
                                    How to Add a Transaction?
                                </h2>
                                <div class="position-absolute top-0 right-0 h-100 d-flex align-items-center">
                                    <i class="fa fa-plus"></i>
                                </div>
                            </div>
                        </a>
                        <div class="collapse" id="faq-17">
                            <div class="card card-body border-0 p-0">
                                <p>In the menu bar, click on the 'Transactions' panel and in the bottom right corner,
                                    click on 'Add Transaction'
                                    After that, Add the amount, Type of Transaction, mode of payment, Category and Press Submit.
                                </p>

                            </div>
                        </div>

                        <a class="py-3 d-block h-10 w-100 position-relative z-index-1 pr-1 text-secondary border-top"
                            aria-controls="faq-18" aria-expanded="false" data-toggle="collapse" href="#faq-18"
                            role="button">
                            <div class="position-relative">
                                <h2 class="h4 m-0 pr-3">
                                    How to add a budget?
                                </h2>
                                <div class="position-absolute top-0 right-0 h-100 d-flex align-items-center">
                                    <i class="fa fa-plus"></i>
                                </div>
                            </div>
                        </a>
                        <div class="collapse" id="faq-18">
                            <div class="card card-body border-0 p-0">
                                <p>In the menu bar, click on the 'Budget' panel and in the bottom right corner,
                                    click on 'Add Budget'
                                    After that, Add the amount, Category and Press Submit.</p>
                            </div>
                        </div>

                        <a class="py-3 d-block h-10 w-100 position-relative z-index-1 pr-1 text-secondary border-top"
                            aria-controls="faq-19" aria-expanded="false" data-toggle="collapse" href="#faq-19"
                            role="button">
                            <div class="position-relative">
                                <h2 class="h4 m-0 pr-3">
                                    What is the purpose of XpensO?
                                </h2>
                                <div class="position-absolute top-0 right-0 h-100 d-flex align-items-center">
                                    <i class="fa fa-plus"></i>
                                </div>
                            </div>
                        </a>
                        <div class="collapse" id="faq-19">
                            <div class="card card-body border-0 p-0">
                                <p>The purpose of XpensO is to give you the convenience of tracking
                                    your daily expenses and keeping a monthly budget which is analyzed to
                                    provide you with the best experience of Expense Management.
                                </p>
                            </div>
                        </div>

                        <a class="py-3 d-block h-10 w-100 position-relative z-index-1 pr-1 text-secondary  border-top"
                            aria-controls="faq-20" aria-expanded="false" data-toggle="collapse" href="#faq-20"
                            role="button">
                            <div class="position-relative">
                                <h2 class="h4 m-0 pr-3">
                                    What is the best email to reach you at?
                                </h2>
                                <div class="position-absolute top-0 right-0 h-100 d-flex align-items-center">
                                    <i class="fa fa-plus"></i>
                                </div>
                            </div>
                        </a>
                        <div class="collapse" id="faq-20">
                            <div class="card card-body border-0 p-0">
                                <p>The best email for any inquiries is xpenso@gmail.com!</p>
                            </div>
                        </div>

                        <a class="py-3 d-block h-10 w-100 position-relative z-index-1 pr-1 text-secondary  border-top"
                            aria-controls="faq-21" aria-expanded="false" data-toggle="collapse" href="#faq-21"
                            role="button">
                            <div class="position-relative">
                                <h2 class="h4 m-0 pr-3">
                                    Where can I read more about this company?
                                </h2>
                                <div class="position-absolute top-0 right-0 h-100 d-flex align-items-center">
                                    <i class="fa fa-plus"></i>
                                </div>
                            </div>
                        </a>
                        <div class="collapse" id="faq-21">
                            <div class="card card-body border-0 p-0">
                                <p> You can check <a href = "https://www.youtube.com/watch?v=dQw4w9WgXcQ">Here</a></p>
                            </div>
                        </div>

                        <a class="py-3 d-block h-10 w-100 position-relative z-index-1 pr-1 text-secondary  border-top"
                            aria-controls="faq-22" aria-expanded="false" data-toggle="collapse" href="#faq-22"
                            role="button">
                            <div class="position-relative">
                                <h2 class="h4 m-0 pr-3">
                                    What is the best time to call?
                                </h2>
                                <div class="position-absolute top-0 right-0 h-100 d-flex align-items-center">
                                    <i class="fa fa-plus"></i>
                                </div>
                            </div>
                        </a>
                        <div class="collapse" id="faq-22">
                            <div class="card card-body border-0 p-0">
                                <p>The best time to call is 24/7! We are always available to answer any questions.
                                    <br>Our Contact Number is +917875359910
                                    <br>Email ID: xpenso@gmail.com
                                </p>
                            </div>
                        </div>
                    </section>
                </section>
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