const date = new Date();
const prices = {}
schedule = {}

prices[0] = "499" // Haircut (M)
prices[1] = "599" // Haircut (F)
prices[2] = "399" // Haircut (Kid)
prices[3] = "299" // Haircut (Trim)

document.getElementById('date').setAttribute("min", date.getFullYear().toString() + '-' + String(date.getMonth() + 1).padStart(2, '0') + '-' + String(date.getDate()).padStart(2, '0'))

function getPrice() {
	document.getElementById('price').innerHTML = "PHP " + prices[document.getElementById('service').value]
}

function addTime() {
	min_hour = 8
	max_hour = 18
	time = document.getElementById('time');
	chosen_date = new Date(document.getElementById('date').value);
	
	var i, L = time.options.length - 1;
	for(i = L; i >= 0; i--) {
		time.remove(i);
	}

	switch (chosen_date.getDay()){
		case 0: //sunday
			min_hour = 9
			max_hour = 16
			break
		case 6: //saturday
			min_hour = 9
			max_hour = 17
	}
	
	for (let i = min_hour; i <= max_hour; i++){
		var hour = i
		var time_opt = document.createElement('option');
		var period = "AM"
		
		if (hour > 12) {
			period = "PM"
			hour = hour - 12
		}
		
		time_opt.value = hour;
		time_opt.innerHTML = hour + period;
		time.appendChild(time_opt);
	}
	
	
}
