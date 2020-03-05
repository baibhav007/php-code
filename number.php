<?php
$a = 1;
while ($a<= 5){
	echo "  The number is : $a  <br>";	
	$a++;
}
?>
<?php
$j = 1;
	 $x = 0;
	for($i = 1; $i <=10; $i++) 
	{
		while($x < 10) 
		{
			echo $j++ ;
			$x++;
		}
		$x = 0;
		echo "<br>";
	}
?>
 <br>
 <?php
for ($i = 1; $i<=5 ; $i++)
{
for ($k = 5 ; $k>=$i; $k--)
{ 	
echo " ";
}
for ($j = 1; $j<=$i; $j++)
{
echo  " * ";
}
echo "<br/>";
}	
?>
<?php	
for($i = 0; $i<=5; $i++)
{
for ($k = 5; $k>=$i; $k--)
{
echo " ";
}
for ($j= 1; $j<=$i; $j++)
{
echo "* ";
}	
echo "<br>";
}
for($i=4; $i>=1; $i--)
{
for ($k =5; $k>=$i; $k--)
{
echo" ";
}
for($j=1; $j <=$i; $j++)
{
echo "* ";
}
echo "<br>";
}
?>

<br>
<?php
for ($i = 1; $i<=5; $i++){
for ($j = 5; $j>=$i; $j--){
	echo " *";}
	echo "<br>";}
for ($i = 5; $i>=1; $i--){
for ($j = 5; $j>=$i; $j--){
	echo "* ";}
	echo  "<br>";}
?>