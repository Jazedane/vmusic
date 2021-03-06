<?php
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <style>
    body {
        background:grey;
    }
    .form {
        margin: 50px auto;
        width: 300px;
        padding: 50px 40px;
        background: white;
    }
    h1.login-title {
        color: black;
        margin: 0px auto 25px;
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
    .login-button {
        color: black;
        background: #55a1ff;
        border: 0;
        outline: 0;
        width: 100%;
        height: 50px;
        font-family: Georgia;
        font-size: 16px;
        text-align: center;
        cursor: pointer;
    }
    .login-button_a {
        color: black;
        background: red;
        border: 0;
        outline: 0;
        width: 100%;
        height: 50px;
        ont-family: Georgia;
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
    .link a {
        color: blue;
    }
    h3 {
        font-weight: normal;
        text-align: center;
    }
    </style>
</head>
<body>
    <div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>You have successfully logged in.</p>
        <p><a href="logout.php"> Go To Home </a></p>
    </div>
</body>
</html>