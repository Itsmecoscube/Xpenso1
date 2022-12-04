<html>
    <head>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<link rel="stylesheet" href="addbudget.css">    
</head>
    <body>
        <div class="popup">
            <a href = "budget-html/index1.php"><button id="close" class = "closebutton">&times;</button></a>
            <h1 style="font-weight:700; font-size: 35;">Add a Budget</h1>
            <br/>
            <form action = "budgetconnect.php" method="post">
                <span style ="font-weight: 600;">Amount</span><br><input type="number" placeholder="Amount" id = "amount" name="amount"><br><br>
                <span style ="font-weight: 600;">Category</span><br><input type="text" placeholder="'ALL' for a General budget" id = "category" name="category"><br><br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    <!--Script-->
    <script type="text/javascript">
window.addEventListener("load", function(){
    setTimeout(
        function open(event){
            document.querySelector(".popup").style.display = "block";
        },
        0 
    )
});


document.querySelector("#close").addEventListener("click", function(){
    document.querySelector(".popup").style.display = "none";
});
    </script>
    </body>

</html>