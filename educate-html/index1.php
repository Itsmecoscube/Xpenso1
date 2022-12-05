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
    <link rel="stylesheet" href="index1.css">
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

            <h1>Educate</h1>
            <div class="youtube-links">
                <h1> Youtube Videos</h1>
                <span class="yt1"><a target="_blank" href="https://www.youtube.com/watch?v=ndOjIPBXC_k"><img
                            src="../public/playground_assets/sharan.png" alt="Finance with Sharan"></a></span>
                <span class="yt2"><a target="_blank" href="https://www.youtube.com/watch?v=uYNfT6B2Hqg"><img
                            src="../public/playground_assets/ankur.png" alt="Ankur Warikoo"></a></span>
                <span class="yt3"><a target="_blank" href="https://www.youtube.com/watch?v=0XYB7aiD20c"><img
                            src="../public/playground_assets/rachana.png" alt="Rachana Ranade"></a></span>
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