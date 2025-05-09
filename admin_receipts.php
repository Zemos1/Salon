<html>

<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="admin_receipts.css">
	 <link href='https://fonts.googleapis.com/css?family=Jost' rel='stylesheet'>
</head>

<body>

	<div class="sidebar">
        <div class="logo">

        </div>
        <hr>
        <div class="navbar">
            <ul>
                <li><a href="admin_dashboard.html">Dashboard</a></li>
                <li><a href="admin_services.html">Services</a></li>
                <li><a href="admin_client.html">Clients</a></li>
                <li><a href="admin_appointments.html">Appointments</a></li>
                <li><a href="">Receipt</a></li>
            </ul>
        </div>
    </div>

    <div class="content">
        <div class="header">
            <input type="search" name="searchnar" id="search" placeholder="Search">

            <button class="clear-btn">Sign out</button>
        </div>
	
		<div class="receipts">
			
			<div class="receipttitle">
				<h2>Receipts</h2>
			</div>
			
			<div class="receipttable">
				<table class="table">
					<thead class="tableheader">
						<tr>
							<th> Receipt ID </th>
							<th> Appointment ID </th>
							<th> Client ID </th>
							<th> Service ID </th>
							<th> Total Amount Paid </th>
							<th> Payment Method </th>
							<th> Payment Date </th>
						</tr>
					</thead>
					<tr data-editing="false" id="1">
						<td name="receipt_id">090909</td>
						<td name="appointment_id">126352</td>
						<td name="client_id">726175</td>
						<td name="service_id">123456</td>
						<td name="payment_total">5000.00</td>
						<td name="payment_method">GCash</td>
						<td name="payment_date">03-05-2025</td>
					  </tr>
					  <tr data-editing="false" id="2">
						<td name="receipt_id">090909</td>
						<td name="appointment_id">126352</td>
						<td name="client_id">726175</td>
						<td name="service_id">123456</td>
						<td name="payment_total">5000.00</td>
						<td name="payment_method">GCash</td>
						<td name="payment_date">03-05-2025</td>
					  </tr>
					  <tr data-editing="false" id="3">
						<td name="receipt_id">090909</td>
						<td name="appointment_id">126352</td>
						<td name="client_id">726175</td>
						<td name="service_id">123456</td>
						<td name="payment_total">5000.00</td>
						<td name="payment_method">GCash</td>
						<td name="payment_date">03-05-2025</td>
					  </tr>
					  <tr data-editing="false" id="4">
						<td name="receipt_id">090909</td>
						<td name="appointment_id">126352</td>
						<td name="client_id">726175</td>
						<td name="service_id">123456</td>
						<td name="payment_total">5000.00</td>
						<td name="payment_method">GCash</td>
						<td name="payment_date">03-05-2025</td>
					  </tr>
					  
					  <script src="admin_services.js"></script>
				</table>

			</div>
			
		</div>

	</div>
	


</body>

</html>