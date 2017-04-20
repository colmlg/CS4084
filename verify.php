<!DOCTYPE html>
 
<html>
<head>
    <title>PROOFREADERS > Sign up</title>
</head>
<body>
    <!-- start header div --> 
    <div id="header">
        <h3>PROOFREADERS > Sign up</h3>
    </div>
    <!-- end header div -->
    <!-- start wrap div -->   
    <div id="wrap">
        <!-- start PHP code -->
<?php
			include('config.php');
			if ($_SERVER['REQUEST_METHOD'] == 'POST')
			{
				// Verify data
				$email = mysqli_real_escape_string($db,$_POST['email']); // Set email variable
				$hash = mysqli_real_escape_string($db,$_POST['hash']); // Set hash variable
						 
				$search = mysqli_query("SELECT email, hash, active FROM users WHERE email='".$email."' AND hash='".$hash."' AND active='0'") or die(mysqli_error($db)); 
				$match  = mysqli_num_rows($search);
						 
				if($match > 0)
				{
					// We have a match, activate the account
					mysqli_query("UPDATE users SET active='1' WHERE email='".$email."' AND hash='".$hash."' AND active='0'") or die(mysqli_error($db));
					echo '<div class="statusmsg">Your account has been activated, you can now login</div>';
				}
				else
				{
				// No match -> invalid url or account has already been activated.
				echo '<div class="statusmsg">The url is either invalid or you already have activated your account.</div>';
				}		 
			}
			else{
				// Invalid approach
				echo '<div class="statusmsg">Invalid approach, please use the link that has been send to your email.</div>';
				}
			
			
             
?>
        <!-- stop PHP Code -->
    </div>
    <!-- end wrap div --> 
</body>
</html>