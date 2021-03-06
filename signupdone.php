<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" href="img/tab-logo.png">
	
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<link rel="stylesheet" href="css/component.css"> <!-- Resource style -->
	<link rel="stylesheet" href="css/animated-bg.css"> <!-- Resource style -->

	<link rel="stylesheet" href="css/searchstyle.css"> <!-- Search Result Page style -->
	<link rel="stylesheet" href="css/login.css"> <!-- Login Dialog style -->
	<link rel="stylesheet" href="css/signup.css"> <!-- Signup style -->

	<script src="js/modernizr.js"></script> <!-- Modernizr -->

	<title>Result</title>
</head>

<body class="cd-body">
	<div class="cd-header">
		<div class="cd-logo"><!-- <img src="" alt="Logo"> --><a href="index.php"><div class="main-head">Foodo's</div></a></div>
		
		<a class="cd-primary-nav-trigger" href="#0">
			<span class="cd-menu-text"></span><span class="cd-menu-icon"></span>
		</a> <!-- cd-primary-nav-trigger -->
	</div>

	<nav>
		<ul class="cd-primary-nav">
			<li class="cd-label">Who</li>

			<li><a href="#">About Us</a></li>

			<li class="cd-label">What</li>

			<li><a href="#">Project Page</a></li>

			<li class="cd-label">Where</li>

			<li><a href="#">Contact Us</a></li>

			<li class="cd-label">Follow us</li>
			
			<li class="cd-social cd-facebook"><a href="#0">Facebook</a></li>
			<li class="cd-social cd-instagram"><a href="#0">Instagram</a></li>
			<li class="cd-social cd-dribbble"><a href="#0">Dribbble</a></li>
			<li class="cd-social cd-twitter"><a href="#0">Twitter</a></li>

			<li class="cd-label" onclick="document.getElementById('id01').style.display='block'" style="cursor: pointer;">Log In<!-- <a href="login.php">Log In</a> --></li>

			<div id="id01" class="modal">
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  				<form class="modal-content animate" action="loginhandler.php" method="POST">
  					<div class="imgcontainer">
      					<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
   					</div>
    				<div class="container">
      					<label><b>Username</b></label>
      					<input type="text" placeholder="Enter Username" name="un" required class="usernames">
      					<br>
      					<label><b>Password</b></label>
      					<input type="password" placeholder="Enter Password" name="pw" required class="passwords">
        				<br>
      					<button type="submit">Login</button><br>
      					<label>
        					<input type="checkbox" checked="checked" name="remember"> Remember me
     					</label>
    				</div>

    				<div class="container" style="background-color:#f1f1f1">
      					<!-- <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button> -->
      					<!-- <span class="psw"><a href="#">Sign Up!</a></span> -->
    				</div>
  				</form>
			</div>
		</ul>
	</nav>


				<!-- <div id="large-header" class="large-header-search">
					<canvas id="demo-canvas"></canvas>
					<h1 class="main-title-search"><b style="color: black; font-style: italic;"> Good Food brings<i style="color: #ffcc00;"><br>Good Luck</i></b></h1>
				</div> -->
				<br><br><br><br><br><br><br><br><br>

	<div class="cd-main-body cd-main-content box-shadow">
		<div class="cd-container" style="margin-top: 10rem;">
			<h4 style="color: rgb(212,175,55);"></h4>
			<h1 style="font-family: Calibri;">Sign UP Done!</h1>
			<br><br><br>
			<div>
			
			</div>
			<br><br><br><br><br><br><br><br><br>
		</div>
	</div>

	<footer class="footer">
  		<div class="footer-content">
			<div class="footer-clmn1">© Design is inpired from <a href="http://diogodantas.com" target="_blank">Diogo Dantas</a> and Developed by <a href="#"><i class="footer-end">Foodo's</i></a></div>
			<div class="footer-clmn2">Email: <a href="mailto:raihanthecooldude@gmail.com" target="_blank">support.foodos@gmail.com</a></div>
		</div>
	</footer>
</body>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD5wGdqrTcgLdOPzMbASsbiHkloxc6v2rE"></script>

		<script src="js/TweenLite.min.js"></script>
		<script src="js/EasePack.min.js"></script>
		<script src="js/rAF.js"></script>
		<script src="js/demo-1.js"></script>

<!-- Script for smooth scrolling -->
<script>
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});

// Login Dialog
var modal = document.getElementById('id01');

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>

</body>
</html>
</html>