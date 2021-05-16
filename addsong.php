<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: "Georgia", "Times New Roman";
    margin: 0;
}

.main {
    margin-left: 160px;
    font-size: 28px;
    padding: 0px 10px;
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

label {
  margin-right: 5px;
}

.container {
  padding: 10px;
}

.form-container {
  margin-bottom: 10px;
}
</style>
</head>
    <?php include './header.php' ?>
    <?php include './footer.php' ?>
<body>
<div class="container">
  <form action="/submit-song.php" method="POST">
    <div class="form-container">
       <label for="title">Title</label>
       <input type="text" name="title" id="title" placeholder="Song Title" required />
    </div>
    <div class="form-container">
       <label for="artist">Artist</label>
       <input type="text" name="artist" id="artist" placeholder="Song artist" required />
    </div>
    <div class="form-container">
       <label for="lyrics">Lyrics</label>
       <br />
       <textarea name="lyrics" id="lyrics" placeholder="Song lyrics" required rows="25" cols="50"></textarea>
    </div>

    <button type="submit">Add Song</button>
  </form>
</div>
</body>
</html>
