<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sparks Bank</title>
	<link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/fixed.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="preconnect" href="https://fonts.gstatic.com">
 <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
</head>

<body data-spy="scroll" data-target="#navbarResponsive">
	<!--Start of home section-->
	<div id="home">
  <!--Navigation-->
	<nav class="navbar navbar-expand-md navbar-dark bg-light fixed-top">
		<a class="navbar-brand"href="index.php">Sparks Bank</a>
		<button class="navbar-toggler"type="button"data-toggle="collapse"data-target="#navbarResponsive">
    <span class="navbar-toggler-icon"></span>
		</button>
   <div class="collapse navbar-collapse"id="navbarResponsive">
		 <ul class="navbar-nav ml-auto">
     <li class="nav-item">
			 <a class="nav-link"href="index.php">Home</a>
		 </li>
		 <li class="nav-item">
			 <a class="nav-link"href="https://www.thesparksfoundationsingapore.org/">About Us</a>
		 </li>
		 <li class="nav-item">
			 <a class="nav-link"href="#Contact">Contact</a>
		 </li>
		 </ul>
	 </div>
	</nav>
	<!--Start Image Slider-->
	<div id="carouselExampleIndicators"class="carousel slide"data-ride="carousel"data-interval="7000">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0"class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner"role="listbox">
			<div class="carousel-item active" style="background-image: url('img/card.jpg');">
				<div class="carousel-caption text-center">
					<h5 style="color:white;">Welcome to Sparks Foundation Bank</h5>
				  <br>
					<br>
					</div>
		</div>
			<div class="carousel-item"style="background-image: url('img/bank.jpg');"></div>
				<div class="carousel-item"style="background-image: url('img/coffee.jpg');"></div>
				<a class="carousel-control-prev"href="#carouselExampleIndicators" role="button"data-slide="prev">
        <span class="carousel-control-prev-icon"aria-hidden="true"></span>
				</a>
				<a class="carousel-control-next"href="#carouselExampleIndicators" role="button"data-slide="next">
        <span class="carousel-control-next-icon"aria-hidden="true"></span>
				</a>
	</div>
</div>
<section class="services" class="offset">
                <h2 id="services1"></h2>
                        <div class="s-heading">
                        <h1 ><font color="#33cccc">OUR SERVICES</font></h1 >
                        <p>Customer Satisfaction is our priority.</p>
                </div>
                <div class="s-box-container">

                        <div class="s-box">

                                <div class="bar" ></div>
                                <img src ="img/teenager.png" alt="1">
                                <h1>View users</h1>
                                <a href="view_user.php" class="s-btn" >Friends</a>
                        </div>

                         <div class="s-box">
                                <div class="bar"></div>
                                <img src ="img/money-transfer.png" alt="2">
                                <h1>Transfer Money</h1>
                                <a href="moneytransfer.php" class="s-btn" >Pay</a>
                        </div>
                                <div class="s-box">
                                <div class="bar"></div>
                                <img src ="img/money-transaction.png" alt="3">
                                <h1>Transactions</h1>
                                <a href="transactionhistory.php" class="s-btn" >History</a>
                        </div>
                </div>
							</section>

<div id="Contact" class="offset">
	<footer>
		<div class="row justify-content-center">
			<div class="col-md-5 text-center">
				<p style="text-align:center">Sparks foundation Bank</p>
				
				<strong>Contact Info: +91-9879539484</strong>
				<p>
					<br>
					help@sparks.com</p>
					<a href="https://www.facebook.com/thesparksfoundation.info"><i class="fab fa-facebook-square"></i></a>
					<a href="https://twitter.com/tsfsingapore"><i class="fab fa-twitter-square"></i></a>
					<a href="https://www.instagram.com/thesparksfoundation.info"><i class="fab fa-instagram"></i></a>
			</div>
			<hr class="socket">
			Copyright &copy; Sparks Foundation bank.
		</div>
	</footer>
</div>
<!--- Script Source Files -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.6.1/js/all.js"></script>
<!--- End of Script Source Files -->

</body>
</html>
