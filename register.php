<html>
    
<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="register.css" />
</head>

<body>
    <form action="registerpost.php" method = "post">
        <div class="container">
          <h1>Register</h1>
          <p>Please fill in this form to create an account.</p>
          <hr>
      
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" id="email" required>
      
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" id="password" required>
      
          <label for="psw-repeat"><b>Repeat Password</b></label>
          <input type="password" placeholder="Repeat Password" name="password2" id="password2" required>

          <label for="name"><b>Name</b></label>
          <input type="text" placeholder="Enter Name" name="name" id="name" required>

          <label for="number"><b>Phone Number</b></label>
          <input type="number" placeholder="Enter Contact No." name="mobileno" id="mobileno" required>

          <label for="age"><b>Age</b></label>
          <input type="number" placeholder="Enter Age" name="age" id="age" required>
          <hr>
      
          <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
          <button type="submit" class="registerbtn">Register</button>
        </div>
      
        <div class="container signin">
          <p>Already have an account? <a href="login.php">Sign in</a>.</p>
        </div>
      </form>
</body>
</html>