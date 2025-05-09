function create() {
	var table = document.getElementById("table");
	var len = table.rows.length;
	var row = table.insertRow(len);

	var cell1 = row.insertCell(0);
	var cell2 = row.insertCell(1);
	var cell3 = row.insertCell(2);
	var cell4 = row.insertCell(3);

	row.id = len.toString();
	row.dataset.editing = false;
	cell1.innerHTML = "New Service";
	cell2.innerHTML = "00.0";
	cell3.innerHTML = "<button onclick='edit("+ len + ")'><img src='edit.png' width='20'></button>"
	cell4.innerHTML = "<button onclick='del("+ len + ")'><img src='trash.png'width='20'></button>";
}

function edit(id) {
	let row = document.getElementById(id);
	const cells = row.querySelectorAll("td");
	
	if (row.dataset.editing == "false") {
		let service = cells[0].innerHTML;
		let price = cells[1].innerHTML;
		
		row.dataset.editing = "true";
		cells[0].innerHTML = "<td name='service'><input type='text' id='service"+id.toString()+"' value="+ service +"></td>";
		cells[1].innerHTML = "<td name='price'><input type='text' id='price"+id.toString()+"' value="+ price +"></td>";
	} else {
		let service = document.getElementById("service"+id.toString()).value;
		let price = document.getElementById("price"+id.toString()).value;
		
		row.dataset.editing = "false";
		cells[0].innerHTML = "<td name='service'>"+service+"</td>";
		cells[1].innerHTML = "<td name='price'>"+price+"</td>";
	}
	
}

function del(id){
	let row=document.getElementById(id);
	row.remove();
}