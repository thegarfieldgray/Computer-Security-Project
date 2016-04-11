<!DOCType>
<?php session_start(); $res = $_SESSION['search_res']; ?>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width = device-width initial-scale = 1">
  <title>CS | Auto Parts</title>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/styles.css">

  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  </style>

</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">CS | Auto Parts</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="#">List</a></li>
      <li><a href="./account.php">Account </a></li> 
      <li><a href="#">About</a></li> 
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
    <form method="get" action="search.php">
      <input name="search" type="text" />
      <input type="submit">
    </form>
  </div>
</nav>

<div class="container-fluid">
  
  <div class="row">
    <?php if(count($res) === 0){ echo "no results"; die();}?> 
    <?php foreach ($res as $r) {?>
      <div class="col-sm-3">
        <img src = "<?php echo $r['Path']; ?>" alt="car" class="img-responsive" id="img-properties">
          <p class="text-center"><?php echo $r['Product_Name']; ?>| Price <?php  echo $r['Cost']; ?> USD</p>
          <form action="home.php" method="get">
          <input type="submit" name="audiA6" value="Buy" class="form-control btn btn-signup">
          </form>
      </div>
    <?php } ?>
  </div>
</div>


</body>
  <script type="text/javascript" src="js/script.js" ></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>