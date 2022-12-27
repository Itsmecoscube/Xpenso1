<?php session_start();
if (!isset($_SESSION['user_name']))
    header("Location:../login.php");
?>
<html>

<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="addtran.css">
</head>

<body>
    <div class="popup">
        <a href="transactions-html/index1.php"><button id="close" class="closebutton">&times;</button></a>
        <h1 style="font-weight:700; font-size: 35;">Add a Transaction</h1>
        <br />
        <form action="connect.php" method="post">
            <span style="font-weight: 600;">Amount</span><br><input type="number" placeholder="Amount" id="amount"
                name="amount" min=1><br>

            <br><span style="font-weight: 600;">Type of payment</span><br />
            <select id="transaction-type" name="transaction-type">\
                <option value="Debit">Debit</option>
                <option value="Credit">Credit</option>

            </select>
            <br />

            <br><span style="font-weight: 600;">Type of payment</span><br />
            <select id="mode-of-payment" name="mode-of-payment">
                <option value="Cash">Cash</option>
                <option value="GPay">Gpay</option>
                <option value="Card">Card</option>
            </select>
            <br><br>
            <span style="font-weight: 600;">Category</span><br>
            <select id="category" name="category">
                <option value="General">General</option>
                <option value="Transport">Transport</option>
                <option value="Food">Food</option>
                <option value="Shopping">Shopping</option>
                <option value="Rent">Rent</option>
                <option value="Petrol">Petrol</option>
                <option value="Medicine">Medicine</option>
                <option value="Entertainment">Entertainment</option>
            </select>
            <br><br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <!--Script-->
    <script type="text/javascript">
        window.addEventListener("load", function () {
            setTimeout(
                function open(event) {
                    document.querySelector(".popup").style.display = "block";
                },
                0
            )
        });

    </script>
</body>

</html>