<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Jost' rel='stylesheet'>
    <link rel="stylesheet" href="appointment.css">
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
			<ul> <li><a href="appointmentdbase.php">Appointment</a></li>
				 <li><a href="servicepage.php">Services</a></li>
				 <li><a href="homepagee (1).php">About</a></li>
				 <li><a href="">Contact</a></li>
			</ul>
		</div>

	</div>
	
</header>

<div class="appointment-form">
	<form name="forminfo">
		<h1> Appointment Form </h1>
		
		<h3> Choose your Service: </h3>
		<hr>
		<div class="service-section">
			<label>Service: </label> 
			<select name="service" id="service" class="service" onchange="getPrice()">
				<option value="0">Haircut (Male)</option>
				<option value="1">Haircut (Female)</option>
				<option value="2">Haircut (Child)</option>
				<option value="3">Haircut (Trim)</option>
				
			</select>
		</div>
		<div class="price-section">
			<label>Price:</label>
			
			<label class="price" id="price">PHP 499</label>
		</div>
		
		<h3> Choose Date & Time of Appointment: </h3>
		<hr>
		
		<div class="date-section">
			<label>Date: </label>
			<input type="date" id="date" onchange="addTime()">
		</div>
		
		<div class="time-section">
			<label>Time: </label>
			<select name="time" id="time" class="time">
			</select>
		</div>
		
		<h3> Contact Information </h3>
		<hr>
		<div class="contact-info">
			<div class="name-section">
				<label>Name: </label>
				<input type="text"></input>
			</div>
			<div class="email-section">
				<label>Email: </label>
				<input type="email"></input>
			</div>
			<div class="contactno-section">
				<label>Contact #: </label>
				<input type="tel"></input>
			</div>
			<input class="submit" type="submit" value="Submit"/>
		</div>
		
		<script src="appointment.js"></script>
		
	</form> 
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
    