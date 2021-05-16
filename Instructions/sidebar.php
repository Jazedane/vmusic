<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: "Georgia", "Times New Roman";
  transition: background-color .5s;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: lightblue;
  border: black;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: black;
  display: block;
}

.sidenav a:hover {
  background-color: green;
  color: black;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}
.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 40px;
  text-align: center;
}
#main {
  transition : margin-left .5s;
  padding: 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>
<div id= "side" class="sidenav">
  <a class="closebtn" onclick="closeNav()">&times;</a>
  <a href="homepage.php"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="addsong.php"><i class="fa fa-fw fa-music"></i> Add Song</a>
  <a href="library.php"><i class="fa fa-fw fa-book"></i> Library</a>
  <a href="settings.php"><i class="fa fa-fw fa-cogs"></i> Settings </a>
  <?php include './search.php' ?>
</div>
<div id="main">
  <span style="font-size:30px;cursor:pointer;float:right" onclick="openNav()">&#9776; </span>
</div>
<script>
function openNav() {
  document.getElementById("side").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("side").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
</script>
</body>
</html>