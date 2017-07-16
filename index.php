<?php require "/includes/singup.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MorseChat - Welcome!</title>
	<link rel="shortcut icon" href="/images/favicon.png" type="image/png">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<link href="https://fonts.googleapis.com/css?family=Homemade+Apple" rel="stylesheet">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: #3b5998">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="l" onselectstart="return false" onmousedown="return false"><h3><strong>MorseChat</strong></h3></div>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" method="POST" action="/includes/enter.php" style="margin-top: 13px;">
            <div class="form-group">
              <input type="text" name="em" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" name="pass" placeholder="Password" class="form-control">
            </div>
            <button type="submit" name="sub" class="btn">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

		<div class="container">
			<div class="row">
				<div class="content__left col-md-8 col-sm-6 col-lg-8">
					<h2 class="MC">Welcome to MorseChat</h2>
					<p>Here you may chat with your friends in safe and funny way</p>
					<p>Login or create a new account to start using!</p>
				</div>
				<div class="content__right col-md-4 col-sm-6 col-lg-4 t" style="padding-left: 45px;">
					<h2 style="padding-left: 25px; padding-top: 35px">Registation</h2>
					<br><br>
					<form role="form" class="form-horizontal" method="POST" action="/index.php">
						<label for="username" class="control-label">Enter your nickname</label>
						<div class="form-group">
							<input type="username" name="username" class="form-contol input-lg" placeholder="Nickname" value="<?php echo $username; ?>" required>
						</div>
						<label for="email" class="control-label"><?php echo "<font color=$color>$email_mes</font>"; ?></label>
						<div class="form-group">
							<input type="email" name="email" class="form-contol input-lg" placeholder="Email" value="<?php echo $email; ?>" required> 
						</div>
						<label for="password" class="control-label">Enter your password</label>
						<div class="form-group">
							<input type="password" name="password" class="form-contol input-lg" placeholder="Password" required>
						</div>
						<label for="password" class="control-label"><?php echo "<font color=$color_2>$pas_mes</font>" ?></label>
						<div class="form-group" id="pass">
							<input type="password" name="password2" class="form-contol input-lg" placeholder="Second password" required>
						</div>
						<br>
						<div>
							<input type="checkbox" name="I'm older than 14" required>
							i'm older than 14
						</div>
						<br>
						<button type="submit" name="submit" class="btn btn-success">Sign up</button>
					</form>
				</div>
			</div>
		</div>

	<?php include "includes/footer.php"; ?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>