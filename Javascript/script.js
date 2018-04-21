var seatPrices =
{
	full: { SA: 18, SP: 15, SC: 12, FA: 30, FC: 25, B1: 30, B2: 30, B3: 30 },
	discount: { SA: 12, SP: 10, SC: 8, FA: 25, FC: 20, B1: 20, B2: 20, B3: 20 }
};

function calculatePrice(v)
{
	var seats = document.getElementsByClassName(v);
	var totalPrice = 0;
	for(var i = 0; i < seats.length; i++)
	{
		var quantity = parseInt(seats[i].value);
		var prices = isDiscounted(v) ? seatPrices.discount : seatPrices.full;
		var seatPrice = prices[seats[i].name];
		var price = quantity * seatPrice; 
		totalPrice += price;		
		document.getElementById(v+"subtotal" + seats[i].name).value = price.toFixed(2);

	}
	document.getElementById("price"+v).value = totalPrice.toFixed(2);
}

function isDiscounted(n)
{
	var day = document.getElementById("day"+n).value;
	var time = document.getElementById("time"+n).value;
	if(day === "Monday" || day === "Tuesday")
	{
		return true;
	}
	else if((day === "Wednesday" ||  day === "Thursday" || day === "Friday") && time === "1pm")
	{
		return true;
	}	
	return false;
}







//Function To Display Popup
function div_show() {
document.getElementById('login').style.display = "block";
}
//Function to Hide Popup
function div_hide(){
document.getElementById('login').style.display = "none";
}



