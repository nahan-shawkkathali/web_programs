<<html>
<head>
<title>electricitybill</title>
</head>
<body>
<center>
<h1>ELECTRICITY BILL CALCULATOR</h1>
<form action="" method="POST">
<label for="unit">Enter units consumed:</label>
<input type="number" name="unit" min="0" required>
<button type="submit" >Calculate</button>
</form>
</center>
</body>
</html>
<?php
echo"<center>";
if(isset($_POST['unit'])){
$unit=$_POST['unit'];
echo"<h1>Electricity bill cost</h1>";
echo"Units consumed: $unit UNIT<br>";
if($unit<=150)
{
$rate=4.45;
$bill=$rate * $unit;
}
else if($unit<=300 && $unit>150)
{
$rate=5.10;
$bill=$rate * $unit;
}
else if($unit<=500 && $unit>300)
{
$rate=6.70;
$bill=$rate * $unit;
}
else
{
$rate=7.35;
$bill=$rate * $unit;
}
echo"<span style='color:green'>Bill payable:&#8377;$bill</span>";
}
echo"</center>";
?>


