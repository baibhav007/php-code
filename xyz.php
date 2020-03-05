<html>
<head>
	<title> my page </title>
</head>
<body>
	<h5> my first page </h5>
		<br>
	<h6> hello </h6>

	
		<form action = "xyz.php" method = "$_GET">
		 <input type = "number" name = "num1">
		 <input type = "number" name = "num2">
		<input type  = "submit">
		</form>
		<br>
				if (isset($_GET["submit"]))

	 answer <?php  echo $_GET ["num1"] + $_GET["num2"] ?>
	 <br>
	 answer	<?php  echo $_GET ["num1"] - $_GET["num2"] ?>
	 <br>
	 answer	<?php  echo $_GET ["num1"] * $_GET["num2"] ?>
	 <br>
	 answer	<?php  echo $_GET ["num1"] / $_GET["num2"] ?>
	 <br>
     answer	<?php  echo $_GET ["num1"] % $_GET["num2"] ?>
     <br>

</body>
</html>
