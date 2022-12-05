<!DOCTYPE html>

<html>

<head>
    <title>Xpenso | Log In</title>
    <link rel="icon" href="public/playground_assets/Logo.png" type="image/x-icon">

    <link rel="stylesheet" type="text/css" href="login.css" />
</head>

<body>
    <form action="loginpost.php" method="post">
        <h2>LOGIN</h2>

        <?php if (isset($_GET['error'])) { ?>

        <p class="error">
            <?php echo $_GET['error']; ?>
        </p>

        <?php } ?>

        <label>User Name</label>

        <input type="text" name="uname" placeholder="User Name" /><br />

        <label>Password</label>

        <input type="password" name="password" placeholder="Password" /><br />

        <button type="submit">Login</button>
    </form>
    <a href = "./register.php">New user? Register here</a>
</body>

</html>