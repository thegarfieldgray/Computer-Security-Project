<!DOCType>
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
      width: 80%;
      margin: auto;
  }
  </style>

</head>
<body>
<div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="./home.php">CS | Auto Parts</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="list.php">List</a></li>
      <li><a href="./account.php">Account </a></li> 
      <li><a href="about.php">About</a></li>
      <li id="padding-left"><form method="get" action="search.php" id="padding-2x">
      <input name="search" type="text" placeholder="Type name of car"/>
      <input type="submit" value="Search">
    </form></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>

<div class="container-fluid">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="img/bmw-cover.png" alt="bmw" width="460" height="345">
        <div class="carousel-caption">
          <h3>BMW</h3>
          <p>Bayerische Motoren Werke AG</p>
        </div>
      </div>

      <div class="item">
        <img src="img/benz.jpg" alt="Benz" width="460" height="345">
        <div class="carousel-caption">
          <h3>Mercedes Benz</h3>
          <p>Something nice maybe</p>
        </div>
      </div>
    
      <div class="item">
        <img src="img/range.jpg" alt="Range" width="460" height="345">
        <div class="carousel-caption">
          <h3>Range Rover</h3>
          <p>Something nice maybe.</p>
        </div>
      </div>

      <div class="item">
        <img src="img/audi.jpg" alt="audi" width="460" height="345">
        <div class="carousel-caption">
          <h3>Audi</h3>
          <p>Something nice maybe</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div class="container-fluid">
  <div class="page-header">
    <h1>Top Sellers</h1>      
  </div>
  
  <div class="row">
  <div class="col-sm-3">
    <img src = "img/audi_.jpg" alt="car" class="img-responsive" id="img-properties">
      <p class="text-center">Audi A6 | Price 30,000 USD</p>
      <form action="home.php" method="get">
      <input type="submit" name="audiA6" value="Buy" class="form-control btn btn-signup">
      </form>
  </div>
  <div class="col-sm-3">
    <img src = "img/bmw-2.jpg" alt="car" class="img-responsive" id="img-properties">
    <p class="text-center">BMW Unknown | Price 28,000 USD</p>
    <form action="home.php" method="get">
      <input type="submit" name="bmw-2" value="Buy" class="form-control btn btn-signup">
      </form>
  </div>
  <div class="col-sm-3">
    <img src = "img/benz-2.jpg" alt="car" class="img-responsive" id="img-properties">
    <p class="text-center">Mercedes Benz | Price 32,000 USD</p>
    <form action="home.php" method="get">
      <input type="submit" name="benz" value="Buy" class="form-control btn btn-signup">
      </form>
  </div>
  <div class="col-sm-3">
     <img src = "img/lancer.png" alt="car" class="img-responsive" id="img-properties">
    <p class="text-center">Mitsubishi Lancer | Price 20,000 USD</p>
    <form action="home.php" method="get">
      <input type="submit" name="lancer" value="Buy" class="form-control btn btn-signup">
      </form>
  </div>

  </div>

</div>

<div class="container-fluid">
  <div class="page-header">
    <h1>Recently Added</h1>      
  </div>

  <div class="row">
  <div class="col-sm-3">
    <img src = "img/lancer.png" alt="car" class="img-responsive" id="img-properties">
    <p class="text-center">Lamborghini | Price 200,000 USD</p>
    <form action="home.php" method="get">
      <input type="submit" name="lambo" value="Buy" class="form-control btn btn-signup">
      </form>
  </div>
  <div class="col-sm-3">
    <img src = "img/Maserati-GranTurismo-S-MC-Sportline-Limited-Edition.png" alt="car" class="img-responsive" id="img-properties">
    <p class="text-center">Maserati GranTurismo | Price 180,000 USD</p>
    <form action="home.php" method="get">
      <input type="submit" name="maserati" value="Buy" class="form-control btn btn-signup">
      </form>
  </div>
  <div class="col-sm-3">
    <img src = "img/Lotus-Exige-S-Roadster.png" alt="car" class="img-responsive" id="img-properties">
    <p class="text-center">Lotus Roadster | Price 100,000 USD</p>
    <form action="home.php" method="get">
      <input type="submit" name="lotus" value="Buy" class="form-control btn btn-signup">
      </form>
  </div>
  <div class="col-sm-3">
    <img src = "img/lexus.jpg" alt="car" class="img-responsive" id="img-properties">
    <p class="text-center">Lexus LFA | Price 85,000 USD</p>
    <form action="home.php" method="get">
      <input type="submit" name="lexus" value="Buy" class="form-control btn btn-signup">
      </form>
  </div>
        
</div>
</div>


</body>
  <script type="text/javascript" src="js/script.js" ></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>