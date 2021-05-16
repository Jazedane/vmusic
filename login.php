<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    body {
        background:grey;
    }
    .form {
        margin: 50px auto;
        width: 300px;
        padding:100px 70px;
        background: white;
    }
    h1.login-title {
        color: black;
        margin: 0px auto 20px;
        font-size: 25px;
        font-weight: 300;
        text-align: center;
    }
    .login-input {
        font-size: 15px;
        border: 1px solid #ccc;
        padding: 10px;
        margin-bottom: 25px;
        height: 25px;
        width: calc(100% - 25px);
    }
    .login-input:focus {
        border-color: dodgerblue;
        outline: black;

    }
    .login-button {
        color: black;
        background-color: dodgerblue;
        border: 0;
        outline: 0;
        width: 100%;
        height: 40px;
        font-size: 16px;
        font-family: Georgia;
        text-align: center;
        cursor: pointer;
    }
    .link {
        color: black;
        font-size: 15px;
        text-align: center;
        margin-bottom: 0px;
    }
    .link_a{
        color: black;
        font-size: 15px;
        float: left;
        margin-bottom: 0px;
    }
    .link_b {
        color: black;
        font-size: 15px;
        float: right;
        margin-bottom: 0px;
    }
    .link_a, .link_b { 
        display: inline-block; 
    }
    h3 {
        font-weight: normal;
        text-align: center;
    }
    .input-container {
        display: -ms-flexbox;
        display: flex;
        width: 100%;
        height: 47px;
        margin-bottom: 15px;
    }
    .icon {
        padding: 10px;
        background: dodgerblue;
        color: white;
        min-width: 40px;
        text-align: center;
    }
    </style>
</head>
<body>
<?php
    require('db.php');
    session_start();
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 0) {
            $_SESSION['username'] = $username;
            header("Location: dashboard.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/Password.</h3><br/>
                  <p class='link'> Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" method="POST" name="login">
        <h1 class="login-title">Login</h1>
        <div class="input-container">
            <i class="fa fa-user icon"></i>
            <input type="text" class="login-input" name="username" placeholder="Username" required/>
        </div>
        <div class="input-container">
            <i class="fa fa-key icon"></i>
            <input type="password" class="login-input" name="password" placeholder="Password"/>
        </div>
        <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me 
        </label>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link_a"><a href="registration.php"> Sign Up </a></p>
        <p class="link_b"><a href="homepage.php"> Back To Home </a></p>
    </form>
<?php
    }
?>
</body>
</html>