<html lang="en"><head>
    <meta charset="utf-8">


    <title>Login - Proofreaders</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    <link href="css/custom.css" rel="stylesheet">


</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
        <div class="container">
            <!-- Logo-->
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html"><span class="glyphicon glyphicon-globe"></span> Proofreaders</a>
            </div>
        </div>
        <!-- /.container -->
    </nav>

<div class="container-fluid">

	
	  <div class="col-center">

			<!-- Form --> 
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						<span class="glyphicon glyphicon-log-in"></span> 
						Log In
					</h3>
				</div>
				<div class="panel-body">
					<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

						<div class="form-group">
							<input type="text" class="form-control" id="email" name="email" placeholder="Email">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password">
						</div>
						<button type="submit" class="btn btn-default">Log In</button>
					</form>
					<div class="register">
						<a href="register.html">Not a member? Click here to register now.</a>
					</div>
				</div>
			</div>
			
			<div class="row">
				<article class="col-xs-12">
					<h2>What is proofreaders?</h2>
					<p>Proofreaders is a crowd sourced proofreading community. Submit your academic work for proofreading by your peers, and proofread others' work. Register today and become part of our growing community.</p>
					<br>
					<br>
					<?php 
					
					if ($_SERVER["REQUEST_METHOD"] == "POST") {
						$email  = $_POST["email"];
						$password = $_POST["pwd"];
						echo "<p>Password  ". $password . "<br>Email:  ". $email. "</p>";
					}
					
					?>
					
				</article>
			</div>
 
			
			

			 
 			
			

	  </div>

	</div><!--/container-fluid-->
	