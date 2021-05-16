<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    body {
        font-family: "Georgia", "Times New Roman";
    }

    .sidenav {
        height: 100%;
        width: 160px;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: rgb(0, 153, 255);
        overflow-x: hidden;
        padding-top: 20px;
    }

    .sidenav a {
        padding: 6px 8px 6px 16px;
        text-decoration: none;
        font-size: 25px;
        color: black;
        display: block;
    }

    .sidenav a:hover {
        color: white;
    }

    @media screen and (max-height: 450px) {
        .sidenav {
            padding-top: 15px;
        }

        .sidenav a {
            font-size: 18px;
        }
    }
    </style>
</head>
<body>
    <header>
	<h1><CENTER><FONT SIZE=7><STRONG>V-Music</STRONG></FONT></CENTER></h1>
    </header>
    <div class="sidenav">
        <a href="homepage.php">Homepage</a>
        <a href="addsong.php">Add Song</a>
        <a href="songsearch.php">Song Search</a>
        <a href="library.php">Library</a>
        <a href="usermanagement.php">User Management</a>
        <a href="userregistration.php">User Registration</a>
        <a href="login.php">Login</a>
        <a href="settings.php">Settings</a>
        <a href="about.php">About</a>
    </div>

</body>

</html>