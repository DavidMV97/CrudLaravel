<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport"
	content="width=device-width, initial-scale=1, user-scalable=yes">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
 
	<div class="container-fluid" style="margin-top: 100px">
 
		@yield('content')
	</div>


	<style type="text/css">
	.table {
		
		border-top: 2px solid #C2EBEA;
	}

	body{
		background: linear-gradient(to right, #DCE3E2   , #8BA9A9); 
	}

	.panel-body{
		background: #F4FFFF ; 
		-webkit-box-shadow: -12px 10px 4px 3px rgba(36,90,92,1);
		-moz-box-shadow: -12px 10px 4px 3px rgba(36,90,92,1);
		box-shadow: -12px 10px 4px 3px rgba(36,90,92,1);
		
	}	



</style>




</body>
</html>