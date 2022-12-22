<html>
    <head>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<style>
    *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #dddddd;
}
.popup{
    background-color: #59d434;
    width: 420px;
    padding: 30px 40px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
    border-radius: 8px;
    display: none;
    font-family: "Poppins",sans-serif;
}
.closebutton{
    display: block;
    margin:0 0 auto;
    background-color: transparent;
    font-size: 30px;
    color: #ffffff;
    background: #03549a;
    border-radius: 100%;
    width: 40px;
    height: 40px;
    border: none;
    outline: none;
    cursor: pointer;
}
.popup h2{
    margin-top: -20px;
 }
 .popup p{
     font-size: 14px;
     margin: 20px 0;
     line-height: 25px;
 }
 a{
    display: block;
    width: 40px;
    height: 40px;
    position: relative;
    left:150px;
    margin: auto;
    background-color: #0f72e5;
    border-radius: 20px;
    color: #ffffff;
    text-decoration: none;
    padding: px 0;
}
</style>
</head>
    <body>
        <div class="popup">
            <a href = "index1.php"><button id="close" class = "closebutton">&times;</button></a>
            <h1 style="font-weight:700; font-size: 35;">Add a Reminder</h1>
            <br/>
            <form action = "reminderconnect.php" method="post">

                <span style ="font-weight: 600;">Amount</span><br>
                <input type="number" placeholder="Amount" id = "amount" name="amount" required><br><br>
                <span style ="font-weight: 600;">Date & Time</span><br> 
                <input type="datetime-local" placeholder="Date & Time" id = "datetime" name="datetime" required><br><br>
                <span style ="font-weight: 600;">Description</span><br>
                <textarea placeholder="Description" id = "description" name="description" rows=3 style="width:330px;"></textarea><br>
                
<br><br>
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