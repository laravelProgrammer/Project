<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#Mailstyle{
			
			background-color: white;
			width:500px;
			margin-left: 190px;
			padding:50px;
			
			
			
		}
	</style>

</head>
<body style="background:lavender;">
	<br><br>
	
	<div id="Mailstyle">
		
		<h3>Name   : {{$name}}</h3>
		<hr>
		<h3>From   : Programmers121@gmail.com</h3>
		<hr>
		<h3>Your   : {{$email}}</h3>
		<hr>
		<h3>Link : {{$address}}</h3>
		<hr>
		<h3>Message : {{$msg}}</h3>
		<hr>

	</div>

<br><br>
</body>
</html>