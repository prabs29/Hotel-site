<?php include("dbconncheckh.php");
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Hotel</title>

    <link href="//fonts.googleapis.com/css?family=Spartan:400,500,600,700,900&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link rel="stylesheet" href="style.css">
  </head>
  <body>
<style>
    html, body, div, input, span, a, select, textarea, option, h1, h2, h3, h4, main, aside, article, section, header, p, footer, nav, pre {
    box-sizing: border-box;
    font-family: Tahoma, Geneva, sans-serif;
}
html {
    background-color: #F8F9F9;
    background: linear-gradient(0deg, #f9f8f8 0%, #f9f8f8 80%, #cb5f51 80%, #cb5f51 100%);
    padding: 0px;
    height: 100%;
}
input,textarea,select {
    outline: 0;
}
h1 {
    margin: 0;
    padding: 25px;
    font-size: 20px;
    text-align: center;
    border-bottom: 1px solid #eceff2;
    color: #6a737f;
    font-weight: 600;
    background-color: #f9fbfc;
}
h1 i {
    padding-right: 10px;
    font-size: 24px;
}
.hotel-reservation-form {
    background-color: #fff;
    width: 500px;
    margin: 0 auto;
    box-shadow: 0px 0px 5px 0px rgba(0,0,0,.2);
}
.hotel-reservation-form .fields {
    position: relative;
    padding: 20px;
}
.hotel-reservation-form select {
    appearance: none;
    background-image: linear-gradient(45deg, transparent 50%, #c7c9cb 50%), linear-gradient(135deg, #c7c9cb 50%, transparent 50%), linear-gradient(to right, #dfe0e0, #dfe0e0);
    background-position: calc(100% - 20px) 20px, calc(100% - 15px) 20px, calc(100% - 40px) 10px;
    background-size: 5px 5px, 5px 5px, 1px 25px;
    background-repeat: no-repeat;
}
.hotel-reservation-form select option:first-child {
    display: none;
 }
.hotel-reservation-form input[type="date"]::-webkit-calendar-picker-indicator {
    color: #ddd;
    filter: invert(0.8);
}
.hotel-reservation-form input[type="text"], 
.hotel-reservation-form input[type="email"],
.hotel-reservation-form input[type="date"],
.hotel-reservation-form input[type="tel"],
.hotel-reservation-form select {
    display: flex;
    margin-top: 10px;
    padding: 15px;
    border: 1px solid #dfe0e0;
    width: 100%;
    flex-basis: 100%;
    height: 47px;
}
.hotel-reservation-form input[type="text"]:focus, 
.hotel-reservation-form input[type="email"]:focus,
.hotel-reservation-form input[type="tel"]:focus,
.hotel-reservation-form input[type="date"]:focus,
.hotel-reservation-form select:focus {
    border: 1px solid #c6c7c7;
}
.hotel-reservation-form input[type="text"]::placeholder, 
.hotel-reservation-form input[type="email"]::placeholder, 
.hotel-reservation-form input[type="tel"]::placeholder, 
.hotel-reservation-form input[type="date"]:invalid, 
.hotel-reservation-form textarea::placeholder,
.hotel-reservation-form select:invalid {
    color: #858688;
}
.hotel-reservation-form textarea {
    resize: none;
    margin-top: 15px;
    padding: 15px;
    border: 1px solid #dfe0e0;
    width: 100%;
    height: 150px;
}
.hotel-reservation-form textarea:focus {
    border: 1px solid #c6c7c7;
}
.hotel-reservation-form input[type="submit"] {
    display: block;
    margin-top: 15px;
    padding: 15px;
    border: 0;
    background-color: #cb5f51;
    font-weight: bold;
    color: #fff;
    cursor: pointer;
    width: 100%;
}
.hotel-reservation-form input[type="submit"]:hover {
    background-color: #c15b4d;
}
.hotel-reservation-form input[name="email"] {
    position: relative;
    display: block;
}
.hotel-reservation-form .field {
    display: inline-flex;
    position: relative;
    width: 100%;
    padding-bottom: 20px;
}
.hotel-reservation-form label {
    font-size: 14px;
    font-weight: 600;
    color: #8e939b;
}
.hotel-reservation-form .field i {
    position: absolute;
    color: #dfe2e5;
    top: 25px;
    left: 15px;
    z-index: 10;
}
.hotel-reservation-form .field i ~ input {
    padding-left: 45px !important;
}
.hotel-reservation-form .responses {
    padding: 15px;
    margin: 0;
}
.hotel-reservation-form .fields .wrapper {
    display: flex;
    justify-content: space-between;
}
.hotel-reservation-form .fields .wrapper > div {
    width: 100%;
}
.hotel-reservation-form .fields .wrapper .gap {
    width: 35px;
}
</style>

<header class="w3l-header-nav">
	<!--/nav-->
	<nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
		<div class="container">
			<a class="navbar-brand" href="index.php">
				<img src="assets/images/hotels.png" alt="Your logo" style="height:45px;" /> Stay inn</a>
			<!-- if logo is image enable this   
						<a class="navbar-brand" href="#index.html">
							<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
						</a> -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Home</a>
					</li>
					<li class="nav-item @@about__active">
						<a class="nav-link" href="about.php">About</a>
					</li>
					<li class="nav-item @@services__active">
						<a class="nav-link" href="services.php">Services</a>
					</li>
					<li class="nav-item @@contact__active">
						<a class="nav-link" href="contact.php">Contact</a>
					</li>
				</ul>
				<a href="login.html" class="ml-3 book btn btn-secondary btn-style">Log in</a>
			</div>
		</div>
	</nav>
	<!--//nav-->
</header>
<!-- //w3l-header -->
 <!-- main-slider -->
 <section class="w3l-main-slider" id="home">
     <div class="companies20-content">
         <div class="owl-one owl-carousel owl-theme">
             <div class="item">
                 <li>
                     <div class="slider-info banner-view bg bg2">
                         <div class="banner-info">
                             <div class="container">
                                 <div class="banner-info-bg">
                                     <h5>great locations followed by great facilities
                                     </h5>
                                     <a class="btn btn-style transparent-btn mt-sm-5 mt-4" href="services.php"> Our
                                         Services</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </li>
             </div>
             <div class="item">
                 <li>
                     <div class="slider-info  banner-view banner-top1 bg bg2">
                         <div class="banner-info">
                             <div class="container">
                                 <div class="banner-info-bg">
                                     <h5>Already many options along with new upcoming branches</h5>
                                     <a class="btn btn-style transparent-btn mt-sm-5 mt-4" href="services.php"> Our
                                         Services</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </li>
             </div>
             <div class="item">
                 <li>
                     <div class="slider-info banner-view banner-top2 bg bg2">
                         <div class="banner-info">
                             <div class="container">
                                 <div class="banner-info-bg">
                                     <h5>Friendly staff and Great service, where the customer is the priority 
                                     </h5>
                                     <a class="btn btn-style transparent-btn mt-sm-5 mt-4" href="services.php"> Our
                                         Services</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </li>
             </div>
             <div class="item">
                 <li>
                     <div class="slider-info banner-view banner-top3 bg bg2">
                         <div class="banner-info">
                             <div class="container">
                                 <div class="banner-info-bg">
                                     <h5>variety of rooms to choose from which ever suits what you are looking for</h5>
                                     <a class="btn btn-style transparent-btn mt-sm-5 mt-4" href="services.php"> Our
                                         Services</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </li>
             </div>
         </div>
     </div>
 </section>
 <!-- /main-slider -->
<section class="w3l-availability-form" id="booking">
    <!-- /w3l-availability-form-section -->
    <div class="w3l-availability-form-main py-5">
        <div class="container pt-lg-3 pb-lg-5">
            <div class="forms-top">
                <div class="form-right">
                    <div class="form-inner-cont">
                        <h3 class="title-small">Check Availability</h3>
                        <!--<form action="#"method="POST">
                            <div class="row book-form">
                                <div class="form-input col-md-4 col-sm-6 mt-3">
                                    <label>Check-in</label>
                                    <input placeholder="Date" class="date" id="datepicker" type="date" value="" onfocus="this.value = '';"
                                     onblur="if (this.value == '') {this.value = '';}" required=""/>-->
                                    <!--<input type="date" name="date" placeholder="Date" required=""/>
                                </div>
                                <div class="form-input col-md-4 col-sm-6 mt-3">
                                    <label>Check-out</label>
                                    <input type="date" name="date" placeholder="Date" required=""/>
                                </div>
                                <div class="form-input col-md-4 col-sm-6 mt-3">
                                    <label>Adults</label>
                                   <select>
                    <option value="0">Adults</option>
                    <option value="1">0</option>
                    <option value="2">1</option>
                    <option value="3"> 2</option>
                    <option value="4">3 or 3+</option>
                 </select>

                                </div>
                                <div class="form-input col-md-4 col-sm-6 mt-3">
                                    <label>Children</label>
                                   <select>
                    <option value="0">Children</option>
                    <option value="1">0</option>
                    <option value="2">1</option>
                    <option value="3"> 2</option>
                    <option value="4">3 or 3+</option>
                 </select>

                                </div>
                                <div class="form-input col-md-4 col-sm-6 mt-3">
                                    <label>Price </label>
                                    <input type="text" name="" placeholder="Max Price ($)" required /name="price">
                                </div>
                                <div class="bottom-btn col-md-4 col-sm-6 mt-3">
                                    <label>Check availability </label>
                                    <input type="Submit" value="Check Availability" name="submit">
                                    <button class="btn btn-style btn-primary w-100 px-2">Check Availability</button>
                                </form>-->
                                <form class="#" method="post" action="">
            <h1><i class="far fa-calendar-alt"></i>Reservation</h1>
            <div class="fields">
                <div class="wrapper">
    <div>
        <label for="arrival">Arrival</label>
        <div class="field">
            <input id="arrival" type="date" name="arrival" required>
        </div>
    </div>
    <div class="gap"></div>
    <div>
        <label for="departure">Departure</label>
        <div class="field">
            <input id="departure" type="date" name="departure" required>
        </div>
    </div>
</div>
<div class="wrapper">
    <div>
        <label for="first_name">First Name</label>
        <div class="field">
            <i class="fas fa-user"></i>
            <input id="firstname" type="text" name="firstname" placeholder="First Name" required>
        </div>
    </div>
    <div class="gap"></div>
    <div>
        <label for="last_name">Last Name</label>
        <div class="field">
            <i class="fas fa-user"></i>
            <input id="lastname" type="text" name="lastname" placeholder="Last Name" required>
        </div>
    </div>
</div>
<label for="email">Email</label>
<div class="field">
    <i class="fas fa-envelope"></i>
    <input id="email" type="email" name="email" placeholder="Your Email" required>
</div>
<label for="phone">Phone</label>
<div class="field">
    <i class="fas fa-phone"></i>
  <input type="text"  id="Phone" placeholder="Phone"name="phone">
</div>
<div class="wrapper">
    <div>
        <label for="adults">Adults</label>
        <div class="field">
            <select id="adults" name="adult" required>
                <option disabled selected value="">--</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
        </div>
    </div>
    <div class="gap"></div>
    <div>
        <label for="children">Children</label>
        <div class="field">
            <select id="children" name="children" required>
                <option disabled selected value="">--</option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
        </div>
    </div>
</div>
<label for="room_pref">Room Preference</label>
<div class="field">
    <select id="room" name="room" required>
        <option disabled selected value="">--</option>
        <option value="Standard">Standard</option>
        <option value="Deluxe">Deluxe</option>
        <option value="Suite">Suite</option>
    </select>
</div>
<br><br><div class="hotel-reservation-form input">
    <center><input type="Submit" value="Reserve" name="submit" width="50px"></center></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //w3l-availability-form-section -->
<!-- about -->
<section class="w3l-about py-5">
	<div class="container py-sm-4">
		<div class="row">
			<div class="col-lg-6 about-left mb-md-0 mb-5">
				<h3 class="title-big">Relax in our Resort</h3>
				<h5>We ensure the best for all our customers.</h5>
				<p class="mt-3">Almost all of our hotels include Spas so whether youve had a rough day out or looking for some relaxing time be sure to check out our spa treatment center which provides customers with many services from massage sessions to steam room or swimming group sessions.</p>
				<a href="about.html" class="btn btn-style btn-primary mt-sm-5 mt-4">Learn About Us</a>
			</div>
			<div class="col-lg-6 about-right position-relative mt-lg-0 mt-5">
				<img src="assets/images/top.jpg" alt="" class="img-fluid img-border mt-4" />
				<img src="assets/images/bottom.jpg" alt="" class="img-fluid position-absolute img-position" />
			</div>
		</div>
	</div>
</section>
<!-- //about -->
<div class="best-rooms py-5">
    <div class="container py-lg-5 py-sm-4">
        <h3 class="title-big text-center">Popular Rooms</h3>
        <div class="ban-content-inf row py-lg-3">
            <div class="maghny-gd-1 col-lg-6">
                <div class="maghny-grid">
                    <figure class="effect-lily">
                        <img class="img-fluid" src="assets/images/room1.jpg" alt="">
                        <figcaption class="w3set-hny">
                            <div>
                                <h4 class="top-text">Luxury Room with Spa inclusive
                                    <span>Peaceful Place to stay</span></h4>
                                <p>From $289 </p>
                            </div>
                        </figcaption>
                    </figure>
                    <div class="room-info">
                        <h3 class="room-title"><a href="contact.php">Luxury Room</a></h3>
                        <ul class="mb-3">
                            <li><span class="fa fa-users"></span> 2 Guests</li>
                            <li><span class="fa fa-bed"></span> Kingsize bed</li>
                            <li><span class="fa fa-bed"></span> 30sqft</li>
                        </ul>
                        <p>Includes all the toiletries for the duration of stay with a big bathroom and bath tub and 1 Spa session for both guests.</p>
                        <a href="contact.php" class="btn btn-style btn-primary mt-sm-4 mt-3">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="maghny-gd-1 col-lg-6 mt-lg-0 mt-4">
                <div class="row">
                    <div class="maghny-gd-1 col-6">
                        <div class="maghny-grid">
                            <figure class="effect-lily border-radius">
                                <img class="img-fluid" src="assets/images/room2.jpg" alt="" />
                                <figcaption>
                                    <div>
                                        <h4>Family Rooms <span> Resort</span></h4>
                                        <p>From $400 </p>
                                    </div>

                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="maghny-gd-1 col-6">
                        <div class="maghny-grid">
                            <figure class="effect-lily border-radius">
                                <img class="img-fluid" src="assets/images/room3.jpg" alt="" />
                                <figcaption>
                                    <div>
                                        <h4>Double Rooms <span> Resort</span></h4>
                                        <p>From $150 </p>
                                    </div>

                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="maghny-gd-1 col-6 mt-4">
                        <div class="maghny-grid">
                            <figure class="effect-lily border-radius">
                                <img class="img-fluid" src="assets/images/room4.jpg" alt="" />
                                <figcaption>
                                    <div>
                                        <h4>Luxury Rooms <span> Resort</span></h4>
                                        <p>From $200 </p>
                                    </div>

                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="maghny-gd-1 col-6 mt-4">
                        <div class="maghny-grid">
                            <figure class="effect-lily border-radius">
                                <img class="img-fluid" src="assets/images/room5.jpg" alt="" />
                                <figcaption>
                                    <div>
                                        <h4>Resort Rooms <span> Resort</span></h4>
                                        <p>From $100 </p>
                                    </div>

                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="w3l-index3">
    <div class="midd-w3 py-5">
        <div class="container py-lg-5 py-md-3">
            <div class="row">
                <div class="col-lg-6 left-wthree-img text-righ">
                    <div class="position-relative">
                        <img src="assets/images/videobg.jpg" alt="" class="img-fluid" />
                        <a href="#small-dialog" class="popup-with-zoom-anim play-view text-center position-absolute">
                            <span class="video-play-icon">

                                <span class="fa fa-play"></span>
                            </span>
                        </a>
                        <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                        <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                            <iframe src="https://player.vimeo.com/video/246941769" allow="autoplay; fullscreen" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-5 about-right-faq align-self">
                    <h6>Discover our Locations</h6>
                    <h3 class="title-big">20 Years of ongoing experience </h3>
                    <p class="mt-3">We have served the customers for over 20 years and have worked on ourselves to improve the quality of our services to the customers in order to make sure they keep coming to us.</p>
                    <ul class="w3l-right-book mt-4">
                        <li><span class="fa fa-check" aria-hidden="true"></span>We make the best for all our customers</li>
                        <li><span class="fa fa-check" aria-hidden="true"></span>Follow our Resort Luxury Hotels</li>
                        <li><span class="fa fa-check" aria-hidden="true"></span>Luxury hotels and best resorts</li>
                        <li><span class="fa fa-check" aria-hidden="true"></span>Double rooms and family rooms</li>
                        <li><span class="fa fa-check" aria-hidden="true"></span>Enjoy a luxury experience</li>
                    </ul>
                    <a href="about.php" class="btn btn-style btn-primary mt-4">Check all packages</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- quotation -->
<div class="quotation py-5">
	<div class="container py-xl-5 py-lg-3">
		<div class="welcome-left text-center py-md-5 py-3">
			<h3>Enjoy a Luxury experience. Discover our locaions. Relax and enjoy your holiday</h3>
			<a href="booking.php" class="btn btn-style transparent-btn mt-sm-5 mt-4 mr-2">Book Now</a>
			<a href="contact.php" class="btn btn-style btn-primary mt-sm-5 mt-4">Contact Us</a>
		</div>
	</div>
</div>
<!-- //quotation -->

<section class="w3l-logos py-5">
    <div class="container py-lg-3">
        <div class="row">
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 logo-view">
                <img src="assets/images/logo1.jpg" alt="company-logo" class="img-fluid" />
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 logo-view">
                <img src="assets/images/logo2.jpg" alt="company-logo" class="img-fluid" />
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 logo-view mt-sm-0 mt-4">
                <img src="assets/images/logo3.jpg" alt="company-logo" class="img-fluid" />
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 logo-view mt-md-0 mt-4">
                <img src="assets/images/logo4.jpg" alt="company-logo" class="img-fluid" />
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 logo-view mt-lg-0 mt-4">
                <img src="assets/images/logo2.jpg" alt="company-logo" class="img-fluid" />
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 logo-view mt-lg-0 mt-4">
                <img src="assets/images/logo1.jpg" alt="company-logo" class="img-fluid" />
            </div>
        </div>
    </div>
</section>
<section class="w3l-footer-29-main">
  <div class="footer-29 py-5">
    <div class="container py-lg-4">
      <div class="row footer-top-29">
        <div class="col-lg-3 col-md-6 col-sm-8 footer-list-29 footer-1">
          <h6 class="footer-title-29">Contact Us</h6>
          <ul>
            <li>
              <p><span class="fa fa-map-marker"></span> Stay Inn hotel, leicester, LE1 1EA, UK.</p>
            </li>
            <li><a href="tel:+7-800-999-800"><span class="fa fa-phone"></span> +44 73344 40923</a></li>
            <li><a href="mailto:prabh@mail.com" class="mail"><span class="fa fa-envelope-open-o"></span>
                prabh@gmail.com</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-4 footer-list-29 footer-2 mt-sm-0 mt-5">

          <ul>
            <h6 class="footer-title-29">Useful Links</h6>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About hotels</a></li>
            <li><a href="#blogposts"> Blog posts</a></li>
            <li><a href="contact.php">Contact us</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-5 footer-list-29 footer-3 mt-lg-0 mt-5">
            <h6 class="footer-title-29">Latest from blog</h6>
            <div class="footer-post mb-4">
              <a href="#url">Work Passionately</a>
              <p class="small"><span class="fa fa-clock-o"></span> March 9, 2020</p>
            </div>
            <div class="footer-post">
              <a href="#url">Work Passionately without any hesitation</a>
              <p class="small"><span class="fa fa-clock-o"></span> March 9, 2020</p>
            </div>
            
        </div>
        <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-4 mt-lg-0 mt-5">
          <h6 class="footer-title-29">About us </h6>
          <p>We aspire to become the best in the business and we will try our best to achieve that goal with the help of our cutomers</p>

          <!--<form action="#" class="subscribe" method="post">
            <input type="email" name="email" placeholder="Your Email Address" required="">
            <button><span class="fa fa-envelope-o"></span></button>
          </form>-->
        </div>
      </div>
    </div>
  </div>
</section>

<section class="w3l-footer-29-main w3l-copyright">
  <div class="container">
    <div class="row bottom-copies">
      <p class="col-lg-8 copy-footer-29">Designed by Parabhjot Singh</p>

      <!--<div class="col-lg-4 main-social-footer-29">
        <a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
        <a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
        <a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
        <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a>
      </div>-->

    </div>
  </div>

 <!-- move top -->
 <button onclick="topFunction()" id="movetop" title="Go to top">
  &#10548;
</button>
<script>
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function () {
    scrollFunction()
  };

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("movetop").style.display = "block";
    } else {
      document.getElementById("movetop").style.display = "none";
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
</script>
<!-- /move top -->
</section>

<!-- Template JavaScript -->
<script src="assets/js/jquery-3.3.1.min.js"></script>

<script src="assets/js/owl.carousel.js"></script>
<!-- script for banner slider-->
<script>
  $(document).ready(function () {
    $('.owl-one').owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        667: {
          items: 1,
          nav: true
        },
        1000: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>
<!-- //script -->

<!-- script for owlcarousel -->
<script>
  $(document).ready(function () {
    $('.owl-testimonial').owlCarousel({
      loop: true,
      margin: 0,
      nav: true,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        667: {
          items: 1,
          nav: true
        },
        1000: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>
<!-- //script for owlcarousel -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script>
  $(document).ready(function () {
    $('.popup-with-zoom-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-zoom-in'
    });

    $('.popup-with-move-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-slide-bottom'
    });
  });
</script>


<!-- disable body scroll which navbar is in active -->
<script>
$(function () {
  $('.navbar-toggler').click(function () {
    $('body').toggleClass('noscroll');
  })
});
</script>
<!-- disable body scroll which navbar is in active -->

<script src="assets/js/bootstrap.min.js"></script>

</body>

</html>
<?php
if($_POST['submit'])
  
{
    $arrival = $_POST['arrival'];
    $departure= $_POST['departure'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $adult = $_POST['adult'];
    $children = $_POST['children'];
    $room = $_POST['room'];
   
    $query = "INSERT INTO reserve values('$arrival','$departure','$firstname','$lastname','$email','$phone','$adult','$children','$room')";
    $data = mysqli_query($conn,$query);

    if($data)
    {
        echo "data inserted";
    }
    else
    {
        echo "data  not inserted";
    }

}
?>