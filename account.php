<?php
    session_start();
    if(isset($_SESSION['user'])){
        $user = $_SESSION['user'];
    } else {
        header('location: index.php');
    }
?>
<!DOCtype>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width = device-width initial-scale = 1">
	<title>CS | Auto Parts</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<script type="text/javascript" src="js/script.js" ></script>

</head>

<body>

<div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-12">
								<a href="#" class="active" id="login-form-link">
                                <?php echo $user['First_Name'] . " " . $user['Last_Name']; ?> Account Info</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form action="update_account.php" method="get" role="form" style="display: block;">
									<div class="form-group">
									<p>First Name: </p>
										<input type="text" name="firstName" id="firstName" tabindex="1" class="form-control"
                                            placeholder="<?php echo $user['First_Name']?>">
									</div>
									<div class="form-group">
									<p>Last Name:</p>
										<input type="text" name="lastName" id="lastName" tabindex="2" class="form-control"
                                            placeholder="<?php echo $user['Last_Name']?>">
									</div>
									<div class="form-group">
									<p>User Name:</p>
										<input type="text" name="userName" id="userName" tabindex="2" class="form-control"
                                            placeholder="<?php echo $user['Username']?>" required>
									</div>
									<div class="form-group">
									<p>Password:</p>
										<input type="text" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" required>
									</div>
									<div class="form-group">
									<p>Credit Card:</p>
										<input type="text" name="creditCard" id="creditCard" tabindex="2" class="form-control"
                                            placeholder="<?php echo $user['Credit_Card']?>" required>
									</div>
									<p>Address:</p>
										<input type="text" name="address" id="address" tabindex="2" class="form-control" 
                                            placeholder="<?php echo $user['Address']?>">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-12">
												<input type ="submit" name="btn-login" class="form-control btn btn-login" value="UPDATE">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


<!-- Script -->

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>