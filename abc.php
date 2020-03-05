<html>
<head>
	<title> My web page </title>
</head>
<body>
<pre>
<?php
$a=array("jerry" => "rat" , "tom" =>"cat");
print_r(array_change_key_case($a ,CASE_UPPER));
?>
</pre>
</body>
</html>

<html>
<body>
<pre>
<?php
$a=array("Jerry"=>"Noida","Abhi"=>"Delhi","Mickey"=>"Haryana");
print_r(array_change_key_case($a,CASE_UPPER));
?>
</pre>
</body>
</html>