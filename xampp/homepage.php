<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    body {
        font-family: "Georgia", "Times New Roman";
    }

    .main {
        margin-left: 160px;
        /* Same as the width of the sidenav */
        font-size: 28px;
        /* Increased text to enable scrolling */
        padding: 0px 10px;
    }
    .footer {
        position: fixed;
        left : 0;
        bottom: 0;
        width: 50%;
        background color: red;
        color: black;
        text-align: center;

    </style>
</head>

<body>

    <?php include './sidebar.php' ?>


    <div class="btn-group">
        <hr width="100%" size="1" color="black" />
        <center>
            <p><button> All Music List</button></p>
            <p><button> Music Genre List</button></p>
            <p><button> Artist List</button></p>
            <p><button> Hot List</button></p>
        </center>
        <hr width="100%" size="1" color="black" />
    </div>

</body>

</html>