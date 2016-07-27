<!doctype html>
<html>
	<head>
		<title>Weather Check</title>
		<meta charset="utf-8" />
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
	
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 content center">
					
					<h1 class="center white shadow"><b>Weather Check</b></h1>
					
					<p class="lead center white shadow">Enter your city and get the weather forecast.</p>
					
					<form>
						<div class="form-group">
						  <input type="text" id="city" name="city" class="form-control" placeholder="Ex. London, Paris, New York..." />
						</div>
					
						<input type="submit" id="checkWeather" class="btn btn-success btn-lg" value="Check the weather"/>
					</form>
					<div class="alert alert-success"></div>
				</div>
				
			</div>
			
		</div>
	
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="script.js"></script>

	</body>
</html>






