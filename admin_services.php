<html>

<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="admin_services.css">
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
	
		<div class="services">
			
			<div class="servicetitle">
				<h2>Services</h2>
				<button class="clear-btn"onclick="create()">Create +</button>
			</div>
			
			<div class="servicetab">
				<div class="servicetable">
					<table id="table">
						<tr>
							<th class="col_service"> Service </th>
							<th class="col_price"> Price </th>
						</tr>
						<tr data-editing="false" id="1">
							<td name="service">Haircut</td>
							<td name="price">100.0</td>
							<td><button name="edit" onclick="edit('1')"><img src="edit.png" width="20"></button></td>
							<td><button onclick="del('1')"><img src="trash.png"width="20"></button></td>
						  </tr>
						  <tr data-editing="false" id='2'>
							<td>Pedicure</td>
							<td>100.0</td>
							<td><button onclick="edit('2')"><img src="edit.png" width="20"></button></td>
							<td><button onclick="del('2')"><img src="trash.png"width="20"></button></td>
						  </tr>
						  <tr data-editing="false" id="3">
							<td>Manicure</td>
							<td>100.0</td>
							<td><button onclick="edit('3')"><img src="edit.png" width="20"></button></td>
							<td><button onclick="del('3')"><img src="trash.png"width="20"></button></td>
						  </tr>
						  
						  <script src="admin_services.js"></script>
					</table>
				</div>
			</div>
			
		</div>

	</div>
	


</body>

</html>