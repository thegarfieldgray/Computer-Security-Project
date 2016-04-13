<!DOCTYPE html>
<html>
<head>
	<title>CS | Auto Parts</title>
	 <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width = device-width initial-scale = 1">


</head>
<body>
<div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="./home.php">CS | Auto Parts</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="list.php">List</a></li>
      <li><a href="./account.php">Account </a></li> 
      <li><a href="./about.php">About</a></li>
    </ul>

    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>

<div class="container">
  <div class="page-header">
    <h1>Group Members</h1>      
  </div>

 <div class="row">
  <div class="col-sm-4">
	<center><img src="img/aj.png" class="img-responsive" alt="Garfield Gray"></center>
	<p class="text-center" id="creators">should change</p> 
  </div>

  <div class="col-sm-4">
	<center><img src="img/aj.png" class="img-responsive" alt="Andre Williams"></center>
	<p class="text-center"></br>Andre Williams</br>1302655 </p> 
  </div>

  <div class="col-sm-4">
	<center><img src="img/aj.png" class="img-responsive" alt="Shane Bell"></center>
	<p class="text-center">------- </p> 
  </div>
  </div>
  </div>



</body>


<script>
var data = '[
			{"name":"Garfield Gray","id":"1203161"},
			 {"name":"Andre Williams","id":"1302655"}
			]';

var obj = JSON.parse(data);

document.getElementById("creators").innerHTML =
obj[0].name + "<br>" + obj[0].id;
</script>

  <script type="text/javascript" src="js/script.js" ></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>