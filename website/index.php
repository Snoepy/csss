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

	<title>C.S.S.S | Home</title>
</head>

<header>
	<ul>
		<li class="header_button left active"><a href="home">HOME</a></li>
		<li class="header_button left"><a href="get-feedback">GIVE FEEDBACK</a></li>
		<li class="header_button left"><a href="/PHP/csss/shop/index.php">GO TO THE SHOP</a></li>
		<li class="header_button right"><a href="login"><i class="fas fa-user"></i></a></li>
	</ul>
</header>

<body class="body">
	<div class="wrapper">
		
		<div id="welcome">
			<h1 style="margin-bottom: 5px;">HOME | Created, Shared and Sold by Society</h1>
			<div class="concept">C.S.S.S is a concept from SNOEPY Productions <sup style="font-size: 8px;">TM</sup></div>
			<p>Welcome to the C.S.S.S. If you are a artist looking for a opportunity to get some feedback from pros in your branche, or to sell your work you are in the right place. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.</p>
		</div>

		<div class="shootout">
			<h2>PHOTO OF THE DAY</h2>
			<div class="half">
				<img src="images/IMG_8578 en 8579.jpg" title="Mariëlle | &copy; Frans Snoek" alt="Mariëlle | &copy; Frans Snoek" class="ModalImage" onclick="onClick(this)">
			</div>
			<div class="half">
				<div class="review"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i> | This is a great photo! // <strong>Peter McKinnon</strong></div>
				<div class="artist"><p>Photo by <strong>Frans Snoek</strong></p></div>
				<a href="https://www.franssnoek.nl/" target="blank"><div class="button">VISIT THE ARTISTS WEBSITE</div></a>
				<a href="/PHP/csss/website/profile"><div class="button">VISIT THE ARTISTS PROFILE</div></a>
				<a href="/PHP/csss/shop/index.php"><div class="button">BUY THIS PICTURE</div></a>
			</div>
		</div>

		<div class="shootout">
			<h2>ARTIST OF THE DAY</h2>
			<div class="half">
				<div>Frans Snoek is a photographer and webdeveloper who makes amazing photo's and websites.</div>
				<p><strong>Photograper</strong> // <strong>Web Developer</strong></p>
				<a href="/PHP/csss/website/profile"><div class="button">VISIT HIS PROFILE</div></a>
				<a href="https://www.franssnoek.nl/" target="blank"><div class="button">VISIT HIS WEBSITE</div></a>
			</div>
			<div class="half">
				<img src="images/frans-snoek-500-px.jpg" title="Frans Snoek" alt="Frans Snoek" class="ModalImage" onclick="onClick(this)">
			</div>
		</div>

		<div class="photos">
			<h2 style="width: 100%;">THE LATEST UPLOADS</h2>
			<div class="column">
				<div class="photobox">
					<div class="image">
						<img src="https://www.franssnoek.nl/images/portfolio/IMG_9908.jpg" onclick="onClick(this)" class="ModalImage PortfolioImage" title="Mariëlle | &copy; Frans Snoek" alt="Mariëlle | &copy; Frans Snoek">
						<a class="button" style="margin: 0;" href="http://localhost/PHP/csss/shop/index.php">BUY THIS IMAGE</a>
					</div>
				</div>
				<div class="photobox">
					<div class="image">
						<img src="https://www.franssnoek.nl/images/portfolio/IMG_8830.jpg" onclick="onClick(this)" class="ModalImage PortfolioImage" title="Mariëlle | &copy; Frans Snoek" alt="Mariëlle | &copy; Frans Snoek">
						<a class="button" style="margin: 0;" href="http://localhost/PHP/csss/shop/index.php">BUY THIS IMAGE</a>
					</div>
				</div>
				<div class="photobox">
					<div class="image">
						<img src="https://www.franssnoek.nl/images/portfolio/IMG_8816.jpg" onclick="onClick(this)" class="ModalImage PortfolioImage" title="Mariëlle | &copy; Frans Snoek" alt="Mariëlle | &copy; Frans Snoek">
						<a class="button" style="margin: 0;" href="http://localhost/PHP/csss/shop/index.php">BUY THIS IMAGE</a>
					</div>
				</div>
			</div>


			<div class="column">
				<div class="photobox">
					<div class="image">
						<img src="images/Joystick.jpg">
						<img src="images/musictrack.png">
						<a class="button" style="margin: 0;" href="http://localhost/PHP/csss/shop/index.php">BUY THIS TRACK</a>
					</div>
				</div>
				<div class="photobox">
					<div class="image">
						<img src="https://www.franssnoek.nl/images/portfolio/IMG_8562.jpg" onclick="onClick(this)" class="ModalImage PortfolioImage" title="Mariëlle | &copy; Frans Snoek" alt="Mariëlle | &copy; Frans Snoek">
						<a class="button" style="margin: 0;" href="http://localhost/PHP/csss/shop/index.php">BUY THIS IMAGE</a>
					</div>
				</div>
				<div class="photobox">
					<div class="image">
						<img src="https://www.franssnoek.nl/images/portfolio/IMG_7164.jpg" onclick="onClick(this)" class="ModalImage PortfolioImage" title="Joyce | &copy; Frans Snoek" alt="Joyce | &copy; Frans Snoek">
						<a class="button" style="margin: 0;" href="http://localhost/PHP/csss/shop/index.php">BUY THIS IMAGE</a>
					</div>
				</div>
			</div>


			<div class="column">
				<div class="photobox">
					<div class="image">
						<img src="https://www.franssnoek.nl/images/portfolio/IMG_8755.jpg" onclick="onClick(this)" class="ModalImage PortfolioImage" title="Mariëlle | &copy; Frans Snoek" alt="Mariëlle | &copy; Frans Snoek">
						<a class="button" style="margin: 0;" href="http://localhost/PHP/csss/shop/index.php">BUY THIS IMAGE</a>
					</div>
				</div>
				<div class="photobox">
					<div class="image">
						<img src="https://www.franssnoek.nl/images/portfolio/IMG_8774.jpg" onclick="onClick(this)" class="ModalImage PortfolioImage" title="Mariëlle | &copy; Frans Snoek" alt="Mariëlle | &copy; Frans Snoek">
						<a class="button" style="margin: 0;" href="http://localhost/PHP/csss/shop/index.php">BUY THIS IMAGE</a>
					</div>
				</div>
				<div class="photobox">
					<div class="image">
						<img src="images/video.png">
						<a class="button" style="margin: 0;" href="http://localhost/PHP/csss/shop/index.php">BUY THIS VIDEO</a>
					</div>
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