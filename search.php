<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

* {
  box-sizing: border-box;
}

form.example input[type=text] {
  font-family: "Georgia";
  padding: 12px;
  font-size: 17px;
  border: 2px solid black ;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: justify;
  width: 20%;
  padding: 12px;
  background: green;
  color: black;
  font-size: 17px;
  border: 2px solid black;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: yellowgreen;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
</style>
</head>
<body>
<form class="example" action="homepage.php" style="margin: 20px;max-width:250px">
  <input type="text" placeholder="Search.." name="search">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>

</body>
</html> 
