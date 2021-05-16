<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.topnav {
    background-color: black;
    float: justify;
    font-family: "Georgia";
    overflow: hidden;
    border-bottom: 1px solid white;
}
.topnav .logo {
    color: yellow;
    float: justify;
    font-size: 50px;
    margin: 25px;
}
.sidenav {
  font-family: "Georgia";
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  float: justify;
  background-color: dodgerblue;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 10px;
  text-decoration: none;
  font-size: 25px;
  color: black;
  border-bottom: 2px solid black;
  display: block;
}
.sidenav a:hover {
  background-color: yellowgreen;
  color: black;
  border: 3px solid black;
}
.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 0;
  border: none;
  padding: 8px 15px;
  font-size: 30px;
}
.openbtn {
  font-size: 20px;
  float: right;
  cursor: pointer;
  background-color: black;
  color: white;
  padding: 10px 15px;
  border-color: white;
  margin-right: 30px;
}

.openbtn:hover {
  background-color: yellowgreen;
}
.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 40px;
  text-align: center;
}
.navbar {
  overflow: hidden;
  background-color: #333; 
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.subnav {
  float: left;
  overflow: hidden;
}

.subnav .subnavbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .subnav:hover .subnavbtn {
  background-color: red;
}

.subnav-content {
  display: none;
  position: absolute;
  left: 0;
  background-color: red;
  width: 100%;
  z-index: 1;
}

.subnav-content a {
  float: left;
  color: white;
  text-decoration: none;
}

.subnav-content a:hover {
  background-color: #eee;
  color: black;
}

.subnav:hover .subnav-content {
  display: block;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>
<div id= "side" class="sidenav">
  <a href= "javascript:void(0)" class="closebtn" onclick="closeNav()"> &times; </a>  
  <a href="homepage.php"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="addsong.php"><i class="fa fa-fw fa-music"></i> Add Song</a>
  <a href="library.php"><i class="fa fa-fw fa-book"></i> Library</a>
  <a href="settings.php"><i class="fa fa-fw fa-cogs"></i> Settings </a>
  <?php include './search.php' ?>
</div>
<div class="topnav">
    <h5>
    <a class="logo"><i class="fa fa-fw fa-music"></i> V-Music</a>
    <button class="openbtn" onclick="openNav()"><i class="fa fa-fw fa-bars"></i></button>
    </h5>
</div>
<script>
function openNav() {
  document.getElementById("side").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}
function closeNav() {
  document.getElementById("side").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
  document.body.style.backgroundColor = "white";
}
</script>
</body>
</html>