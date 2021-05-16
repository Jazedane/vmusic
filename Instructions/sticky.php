<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-size: 28px;
  font-family: Arial, Helvetica, sans-serif;
}
.btn :hover {
  border-color: black;
  color: black;
}

.btn .active {
  background-color: #04AA6D;
  color: white;
}

.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 60px;
}
.btn {
  background-color: green;
  border: none;
  color: white;
  padding: 10px 28px;
  font-size: 16px;
  font-family: "Georgia";
  cursor: pointer;
}
.btn .login{
  background-color: green;
  border: 2px solid black;
  color: white;
  padding: 10px 28px;
  font-size: 16px;
  font-family: "Georgia";
  cursor: pointer;
  float: right;

}
.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 40px;
  text-align: center;
}
.Title {background-color: green;}
.title:hover {background-color: red; }

.Artist {background-color: green;} 
.artist:hover {background: red; }

.Lyrics {background-color: green;}
.lyrics:hover {background: red; }

.Genre {background-color: green;}
.genre:hover {background: red; }

.Login {background-color: green;}
.login:hover {background: blue; border-line: 2px solid black;}
</style>
</head>
    <?php include './header.php' ?>
    <?php include './footer.php' ?>
<body>

<div class="btn">
    <button class="btn title:btn active" > Title </a></button>
    <button class="btn artist"> Artist </button>
    <button class="btn lyrics"> Lyrics </button>
    <button class="btn genre"> Genre </button>
    <a button class="btn login" href="login.php"><i class="fa fa-fw fa-user"></i> Login/Sign Up </a></button>
</div>

<div class="content">
  <h3>Sticky Navigation Example</h3>
  <p>The navbar will stick to the top when you reach its scroll position.</p>
</div>

<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>

</body>
</html>
