$("#checkWeather").click(function(event){
	
	event.preventDefault();
	
	if ($("#city").val() != "") {
	
		$.get("scraper.php?city=" + $("#city").val(), function(data) {
			$(".alert").html(data).fadeIn();
			$(".alert").display("block");
		});
		
	} else {
		
		alert("Please enter a city.");
		
	}
});