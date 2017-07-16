<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MorseChat - Welcome!</title>
	<link rel="shortcut icon" href="/images/favicon.png" type="image/png">
	<link rel="stylesheet" type="text/css" href="css/style2.css">
	<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

	<link href="https://fonts.googleapis.com/css?family=Homemade+Apple" rel="stylesheet">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
</head>
<body>
	<div id="app">
		<header>
			
				<div class="k">
		        	<button @click="show = !show">
		            	<i class="ion-navicon-round"></i>
		            </button>
		        </div>
	            <div class="l" onselectstart="return false" onmousedown="return false"><h3><strong>MorseChat</strong></h3></div>
	       
        </header>

	    <transition name="slide">
        	<aside v-show="show">
        		<ul>
        			<li>one</li>
        			<li>two</li>
        			<li>
        				<form method="POST" action="/includes/logout.php" style="margin-top: 13px;">
				            <button type="submit" name="sub" class="btn">logout</button>
			          </form>
        			</li>
        		</ul>
        	</aside>
        </transition>
	</div>
	

	<h1>Hello,</h1>
		
	<?php include "includes/footer.php"; ?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/vue"></script>
	<script type="text/javascript">
		var app = new Vue({
			el: "#app",
			data: {
				show: false
			}
		}); 
	</script>
</body>
</html>