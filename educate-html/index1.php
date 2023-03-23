<?php session_start(); ?>
<html>
<title>Xpenso | Educate</title>
<link rel="icon" href="../public/playground_assets/Logo.png" type="image/x-icon">

<head>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        data-tag="font" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        data-tag="font" />
    <script src="https://kit.fontawesome.com/2291efdc8d.js" crossorigin="anonymous"></script>

    <!---->
<style>
    .body {
  margin-top: 0px;
  margin-left: 0px;
  margin-right: 0px;
  margin-bottom: 0px;
  background-color: #f5f5fb;
}

.searchbar {
  display: flex;
  max-width: 500px;
  align-items: left;
  position: relative;
  border-color: rgb(135, 158, 178);
}

.searchbar-input {
  background-color: white;
  border-radius: 15px;
  border-color: rgb(135, 158, 178);
  align-items: center;
  width: 100%;
}

.reminders-page-right {
  background-color: white;
  width: 20%;
  float: right;
  margin-top: 0px;
  min-height: 100vh;
  margin-right: 90;
  border-radius: 20px;
  position: fixed;
  right: -80px;
}

.reminders-page-left {
  width: 20%;
  float: left;
  margin-left: 60px;
  margin-top: 10px;

}

.reminders-page-middle {
  width: 60%;
  margin: auto;
  position: relative;
}

.reminders-page-left-menu {
  color: rgba(133, 135, 153, 1);
  width: 82px;
  height: auto;
  font-size: 20px;
  align-self: auto;
  font-style: Medium;
  text-align: left;
  font-family: Inter;
  font-weight: 500;
  line-height: normal;
  font-stretch: normal;
  text-decoration: none;
  position: fixed;
}

.reminders-page-text1 {
  top: 100px;
  position: absolute;
}

.reminders-page-text2 {
  top: 175px;
  position: absolute;
}

.reminders-page-text3 {
  top: 250px;
  position: absolute;
}

.reminders-page-text4 {
  top: 325px;
  position: absolute;
}

.reminders-page-text5 {
  top: 400px;
  position: absolute;
}

.reminders-page-text6 {
  top: 475px;
  position: absolute;
}

.reminders-page-text7 {
  top: 550px;
  position: absolute;
}

.reminders-page-text8 {
  top: 625px;
  position: absolute;
}

.menu-button1 {
  width: 130px;
  height: 40px;
  background-color: #aeff83;
  border-radius: 10px;
  border-color: #f5f5fb;
}

.menutext {
  color: rgb(55, 56, 62);
  width: 82px;
  height: auto;
  font-size: 17px;
  align-self: auto;
  text-align: left;
  font-family: Inter;
  font-weight: 600;
  line-height: normal;
  font-stretch: normal;
  text-decoration: none;
}

.Logo {
  position: fixed;
  max-width: 50px;
  border-radius: 15px;
}

.brand {
  position: fixed;
}

.brand-text1 {
  color: red;
}

.brand-text2 {
  color: purple;
  position: relative;
  right: 5;
}

.brand-text3 {
  color: green;
  position: relative;
  right: 10px;
}

.brand-text {
  position: relative;
  top: 11px;
  left: 55px;
  font-size: 24px;
  font-weight: 600;
}

.searchbar input {
  border-radius: 12px;
  height: 45px;
  min-width: 200%;
  margin-top: 20px;
}

.transaction-data {
  border: 0px;
}

.transaction-header {
  border-radius: 15px;
  background-color: #4ad400;
}

.transaction-table {
  border-radius: 20px;
  margin: auto;
  background-color: lightgrey;
}

.profile {
  position: relative;
  top: 15px;
  left: 20px;
}

.searchicon {
  width: 20px;
  height: 20px;
  margin: 0px;
  position: relative;
  top: 33px;
  left: 25%;
  opacity: 50%;
}

.x {
  font-weight: 700;
  color: rgb(0, 0, 0);
}

.username {
  font-weight: 800;
  font-size: 20;
  position: relative;
  top: -40px;
  left: 70px;
  font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
}

.Progress {
  color: rgb(0, 0, 0);
  width: 82px;
  font-size: 18px;
  font-family: Inter;
  font-weight: 800;
  position: relative;
  margin-left: 15px;
  height: 250px;
}

.Reminders {
  color: rgb(0, 0, 0);
  width: 82px;
  font-size: 18px;
  font-family: Inter;
  font-weight: 800;
  position: relative;
  margin-left: 15px;
  height: 250px;
}

#myProgress {
  width: 100%;
  background-color: grey;
}

#myBar {
  width: 1%;
  height: 30px;
  background-color: green;
}

.ellipse-1 {
  position: fixed;
  left: -20px;
  bottom: -10px;
}

.add-transaction {
  position: relative;
  width: 200px;
  height: 40px;
  margin: auto;
}

.add-transaction-button {
  background-color: #4ad400;
  width: 200px;
  height: 40px;
  font-weight: 700;
  font-size: large;
  font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;

  align-self: center;
}

.transaction-table {
  position: relative;
}

.yt1 {
  position: relative;
  left: 10px;

}

.yt2 {
  position: relative;
  left: 50px;

}


.pod1 {
  position: relative;
  left: 25px;

}

.pod2 {
  position: relative;
  left: 50px;

}

.pod3 {
  position: relative;
  left: 75px;

}

.port1 {
  position: relative;
  left: 25px;

}

.port2 {
  position: relative;
  left: 50px;
}

.blog1 {
  position: relative;
  left: 25px;

}

.blog2 {
  position: relative;
  left: 50px;

}

.blog3 {
  position: relative;
  left: 75px;
}
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
                <span class="reminders-page-text6"><a href="../educate-html/index1.php"><button class="menu-button1"
                            style="background-color:#65f9c5;"><span class="menutext">Educate</span></button></a></span>
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
                <input type="search" placeholder="  Search" name="search" style="border: 20px;width:160px;">
            </form>
            <img src="../public/playground_assets/search.svg" class="Searchicon">
        </div>
        <!-- Mid Division-->
        <div class="reminders-page-middle">

            <h1>Educate</h1>
            <div class="youtube-links">
                <h1> Youtube Videos</h1>
                <span class="yt1"><a target="_blank" href="https://www.youtube.com/watch?v=ndOjIPBXC_k"><img
                            src="../public/playground_assets/sharan.png" alt="Finance with Sharan"></a></span>
                <span class="yt2"><a target="_blank" href="https://www.youtube.com/watch?v=uYNfT6B2Hqg"><img
                            src="../public/playground_assets/ankur.png" alt="Ankur Warikoo"></a></span>
            </div> <br><br><br><br><br>

            <div class="podcasts">
                <h1>Podcasts on Spotify</h1>
                <span class="pod1"><a target="_blank"
                        href="https://open.spotify.com/show/7dnn22EWyo6MLsPaR492BM?si=0908119baf3945d0"><img
                            src="../public/playground_assets/spotify1.png" alt="Millenial Investing"></a></span>
                <span class="pod2"><a target="_blank"
                        href="https://open.spotify.com/show/12jUp5Aa63c5BYx3wVZeMA?si=68c8d2ead0a84741"><img
                            src="../public/playground_assets/spotify2.png" alt="Finshots Daily"></a></span>
                <span class="pod3"><a target="_blank"
                        href="https://open.spotify.com/show/3nSdkNgBMvMJUZfDwU7aeZ?si=fe5d67cd718f43dc"><img
                            src="../public/playground_assets/spotify3.png" alt="India FinTech"></a></span>
            </div> <br><br><br>

            <div class="portals">
                <h1>Online Websites to checkout</h1>
                <span class="port1"><a target="_blank" href="https://zerodha.com/varsity/"><img
                            src="../public/playground_assets/zerodha.png" alt="Zerodha Varsity"></a></span>
                <span class="port2"><a target="_blank" href="https://finshots.in/"><img
                            src="../public/playground_assets/finshots.png" alt="Finshots"></a></span>
            </div> <br><br><br>

            <div class="Blogs">
                <h1>Blogs and News</h1>
                <span class="blog1"><a target="_blank" href="https://www.jagoinvestor.com/"><img
                            src="../public/playground_assets/jagoinvestor.png" alt="JagoInvestor"></a></span>
                <span class="blog2"><a target="_blank" href="https://www.moneycontrol.com/"><img
                            src="../public/playground_assets/moneycontrol.png" alt="MoneyControl"></a></span>
                <span class="blog3"><a target="_blank" href="https://www.cashoverflow.in/"><img
                            src="../public/playground_assets/cashoverflow.png" alt="CashOverflow"></a></span>
            </div> <br><br><br>

        </div>
    </div>
</body>

</html>