<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="images/lady_liberty.png">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/modal.css">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<title>C.S.S.S | Frans Snoek</title>
</head>

<header>
	<ul>
		<li class="header_button left"><a href="home">HOME</a></li>
		<li class="header_button left"><a href="get-feedback">GET FEEDBACK</a></li>
		<li class="header_button left"><a href="/PHP/csss/shop/index.php">GO TO THE SHOP</a></li>
		<li class="header_button right"><a href="login"><i class="fas fa-user"></i></a></li>
	</ul>
</header>

<body class="body">
	<div class="wrapper">

		<div class="section about">
			<div class="half">
				<h1>Frans Snoek</h1>
				<h3>Photographer // Film Maker // Web Developer</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<a href="https://www.franssnoek.nl/" target="blank"><div class="button">VISIT MY WEBSITE HERE</div></a>
			</div>

			<div class="half">
				<img src="images/frans-snoek-500-px.jpg">
			</div>
		</div>

		<div class="section portfolio">
			<h2 style="margin-left: 20px;">Images</h2>
			<div class="half">
				<div class="image">
					<img src="images/IMG_8578 en 8579.jpg" onclick="onClick(this)" class="ModalImage PortfolioImage" title="Mariëlle | &copy; Frans Snoek" alt="Mariëlle | &copy; Frans Snoek">
					<a class="button" style="margin: 0;" href="http://localhost/PHP/csss/shop/index.php">BUY THIS IMAGE</a>
				</div>
				<div class="image">
					<img src="https://www.franssnoek.nl/images/portfolio/IMG_8426.jpg" onclick="onClick(this)" class="ModalImage PortfolioImage" title="Mariëlle | &copy; Frans Snoek" alt="Mariëlle | &copy; Frans Snoek">
					<a class="button" style="margin: 0;" href="http://localhost/PHP/csss/shop/index.php">BUY THIS IMAGE</a>
				</div>
			</div>
			<div class="half">
				<div class="image">
					<img src="https://www.franssnoek.nl/images/portfolio/IMG_8398.jpg" onclick="onClick(this)" class="ModalImage PortfolioImage" title="Mariëlle | &copy; Frans Snoek" alt="Mariëlle | &copy; Frans Snoek">
					<a class="button" style="margin: 0;" href="http://localhost/PHP/csss/shop/index.php">BUY THIS IMAGE</a>
				</div>
				<div class="image">
					<img src="https://www.franssnoek.nl/images/portfolio/IMG_8562.jpg" onclick="onClick(this)" class="ModalImage PortfolioImage" title="Mariëlle | &copy; Frans Snoek" alt="Mariëlle | &copy; Frans Snoek">
					<a class="button" style="margin: 0;" href="http://localhost/PHP/csss/shop/index.php">BUY THIS IMAGE</a>
				</div>
			</div>
		</div>

	</div>

	<div id="modal01" class="modal" style="padding-top:0" onclick="this.style.display='none'">
	    <span class="close">×</span>
	    <div class="animate-zoom">
	    	<img id="img01" class="modal-content">
		    <p id="caption"></p>
	    </div>
	</div>

</body>
<footer>

	<p>&copy; 2019 by SNOEPY Productions</p>
	<p style="font-weight: 400; font-size: 12px;">versie 1.0.0 (beta) | <a href="login">log in</a> | Realised by <a target="blank" href="https://www.franssnoek.nl">Frans Snoek</a></p>
	
</footer>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/modal.js"></script>