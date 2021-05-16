<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title> Sign Up</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    body {
        font-family: Georgia;
        background:grey;
    }
    .form {
        margin: 50px auto;
        width: 400px;
        padding: 100px 50px;
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
        width: calc(100% - 23px);
    }
    .login-input:focus {
        border-color: blue;
        outline: black;

    }
    .login-button_a {
        color: black;
        background: red;
        border: 0;
        outline: 0;
        width: 100%;
        height: 40px;
        font-family: Georgia;
        font-size: 16px;
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
    if (isset($_REQUEST['username'])) {
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $query    = "INSERT into `users` (username, password, email,)
                     VALUES ('$username', '" . md5($password) . "', '$email')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You have successfully logged in.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>Sign Up</a> again.</p>
                  <p class='link_b'><a href='homepage.php'>Back To Home</a></p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title"> Sign Up </h1>
        <div class="input-container">
            <i class="fa fa-user icon"></i>
            <input type="text" class="login-input" name="username" placeholder="Username" required />
        </div>
        <div class="input-container">
            <i class="fa fa-envelope icon"></i>
            <input type="text" class="login-input" name="email" placeholder="Email Address">
        </div>
        <div class="input-container">
            <i class="fa fa-key icon"></i>
            <input type="password" class="login-input" name="password" placeholder="Password">
        </div>
        <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me 
        </label>
        <input type="submit" name="submit" value="Sign Up" class="login-button_a">
        <p class="link_a"><a href="login.php">Click to Login</a></p>
        <p class="link_b"><a href="homepage.php">Back To Home</a></p>
    </form>
<?php
    }
?>
</body>
</html>