
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Jost' rel='stylesheet'>
    <link rel="stylesheet" href="homepagee (1).css">
    <title>Maketh Salon</title>
</head>
<body>
    
    <div class="banner">
        <div class="contact-facebook">
            <img src="" alt="">
            <p class="contact-text">https://www.facebook.com/makethsalon</p>
        </div>
        
        <div class="line-separator"></div>

        <div class="contact-number">
            <img src="" alt="">
            <p class="contact-text">0969 315 1228</p>
        </div>
    </div>

    <header class="header">
    <div class="nav-bar-main">
        <div class="nav-bar-logo">
            <img class="logo-img" src="https://scontent.fmnl30-2.fna.fbcdn.net/v/t1.15752-9/484622558_661433989694242_3034346904492432983_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=0024fc&_nc_eui2=AeE20AXUWVuEcVDVAUedp6IEiWUahuWVv5uJZRqG5ZW_mzvVmiH3sDlC9dMQEmKxyqJDSZLjKtFsi-pvkSr0miWs&_nc_ohc=nKNAqRLdLIMQ7kNvgEuLOwC&_nc_oc=AdiE0Or76TXrvBTCr6Kg6SmOmrRFoYMLa59IGle5INIgDC1suwBc-JHM0cqH-vKOOck&_nc_ad=z-m&_nc_cid=0&_nc_zt=23&_nc_ht=scontent.fmnl30-2.fna&oh=03_Q7cD1wFU51MAySMIIz8GwYvOqPvP8B_8-ptnryHCIsHeeftKdg&oe=6800EA3D" alt="" width="50px">
        </div>

        <div class="nav-bar-content">
            <ul>
                <li><a href="appointmentdbase.php">Appointment</a></li>
                <li><a href="servicepage.php">Services</a></li>
                <li><a href="homepagee (1).php">About</a></li>
                <li><a href="">Contact</a></li>
                <?php
                session_start(); // Start the session
                if (isset($_SESSION['username'])) {
                    // If user is logged in, show account link
                    echo '<li><a href="account.php ">Account (' . htmlspecialchars($_SESSION['username']) . ')</a></li>';
                } else {
                    // If not logged in, show login link
                    echo '<li><a href="salon_login.html">Login</a></li>';
                }
                ?>
            </ul>
        </div>
    </div>
</header>

    <!--<div class="body-hero-picture">
        
    </div>-->

    <div class="about-section">
        <div class="about-img">
            <img width="300px" class="about-pic" src="https://s3-alpha-sig.figma.com/img/1973/11d5/098e901c3aac00bf7c3b7baab1d3277e?Expires=1743379200&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=aG95iLlrviBHPaYdl6s9DGzM07GMS8J7sKPntv20JKJctbf5y0Kt9mKprIzQ6Rkmj634AI9xhWjkgU1zHIT5cktS~vugf~VLBRF34Q6UPpufBfc9jgpFcB3ARV4nU4cVrh6znxQVJAFrYY9LA7kuhITNPZpaIKrRS-4ekzubdyTzsC6nqF9G99BuLhUK5EIWZKtwemulw8ZvH12EGRW5WPMTwHECuYejfFYrKVqxrjyXXuj6SD50ZUmMFMmVufpq0Pp9wXEJkEP6hTfKzcnMOGPeyOCP1grzUOWPtEGaD7WaNpeD~tOi6yOCJ~dFC3HHmcopRQAQWSrO8I-l4OmHsg__" alt="">
            <div class="rectangle"></div>
        </div>
        <div class="about-content">
            <h3 id="about-head-text1">A Salon for all</h3>
            <h1 id="about-head-text2">Welcome to Maketh Salon</h1> <br>
            <p class="main-content-text" id="about-main-text"> Spread over a fully furbished room, our beautiful spa offer a soothing environment in which you can rest, relax and feel completely rejuvenated. <br><br>
                Maketh Salon is an affordable beauty and hair salon dedicated to providing  professional grooming, hair styling, and skincare services. 
                The name "Maketh"  signifies transformation and confidence, reflecting the salon’s commitment to  enhancing natural beauty with expert care. 
                With a focus on quality, affordability,  and personalized service, We ensure that clients receive stylish and  refreshing treatments in a welcoming and relaxing environment.
            </p>
        </div>
    </div>

    <div class="services-section">
        <div class="services-content">
            <h1 id="services-heading">Our Services</h1>
            <p class="main-content-text" id="services-main-text">
                At Maketh Salon, we offer a comprehensive range of hair services designed to enhance your style and confidence. Our expert stylists specialize in haircuts and
                coloring, delivering tailored looks that complement your personality. We also provide professional keratin and relaxing treatments for smooth, frizz-free hair, as well as 
                nourishing hair treatments to restore vitality and shine. For those seeking a sleek and straight finish, our rebonding service ensures long-lasting results, while our 
                perming service adds beautiful curls and waves for a voluminous, dynamic look. At Maketh Salon, we are committed to helping you achieve your desired hairstyle with 
                precision and care.</p>
        </div>
        <div class="services-pictures">
				<hr>
				<img height="90" width="90">
				<img height="90" width="90">
				<img height="90" width="90">
				<img height="90" width="90">
				<img height="90" width="90">
        </div>
		<div class="services-features">
				<p>Haircut and Coloring</p>
				<p>Rebonding</p>
				<p>Keratin Therapy</p>
				<p>Perming</p>
				<p>Ordinary/Intense Treatment</p>
				
        </div>
    </div>
	
	<div class="special-offers-section">
		<div class="offers-information">
			<div style="float:right;">
				<h1>Our Special Offers</h1>
				<h2>Color/Brazilian for P1499</h2>
				<h2>Rebonding/Color for P1499</h2>
				<h2>Haircut + Shampoo + Blowdry for P1499</h2>
			</div>
		</div>
		<div class="offers-pictures">
			<div>
				<img class="special-offer-image">
				<img class="special-offer-backdrop">
			</div>
		</div>
	</div>

	<div class="appointment-section">
		<div class="appointment-content">
			<h2 class="appointment-text"> Make an appointment now! </h2>
			<button class="appointment-button" onclick="window.location.href='appointmentdbase.php'"     > Book Appointment </button>
		</div>
	</div>

	<footer class="footer">
	
		<div class="footer-info">
			<p>Website Made by 1-CCSAD Group 6</p>
		</div>
		
		<div class="contact-us">
			<b>Contact Us</b>
			<p>Block 215 Lot 6 Sampaguita Street, Corner Carnation Pembo Talipapa, Makati City, Philippines</p>
		</div>
		
		<div class="working-hours">
			<b>Working Hours</b>
			<p>Monday - Friday: 8am - 6pm EST</p>
			<p>Saturday: 9am - 5pm EST</p>
			<p>Sunday: 9am - 4pm EST</p>
		</div>
		
		<div class="bottombanner">
			<span class="termsofuse">
				Terms of Use
			</span>
			<span class="privpolicy">
				Privacy Policy
			</span>
		</div>
		
	</footer>
</body>
</html>