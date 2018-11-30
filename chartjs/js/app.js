$(document).ready(function(){
	$.ajax({
		url: "data.php",
		method: "GET",
		success: function(data) {
		//	console.log(data);
			var customer_id = [];
			var amount = [];

			for(var i in data) {
				customer_id.push("Customer" + data[i].customer_id);
				amount.push(data[i].amount);
			}

			var chartdata = {
				labels: customer_id,
				datasets : [
					{
						label: 'Customer Amount',
						backgroundColor: 'rgba(200, 200, 200, 0.75)',
						borderColor: 'rgba(200, 200, 200, 0.75)',
						hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
						hoverBorderColor: 'rgba(200, 200, 200, 1)',
						data: amount
					}
				]
			};

			var ctx = $("#mycanvas");

			var barGraph = new Chart(ctx, {
				type: 'bar',
				data: chartdata
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});