<html>
<head>
<style>
.c{
border:solid 1px;font-size:25px;padding:3px
}
</style>
</head>
<body>
<?php
$data=array(array("1","sachin","tendulkar"),array("2","ms","dhoni"),array("3","virat","kohli"));
echo"<h1>INDIAN CRICKET PLAYERS</h1>";
echo"<table class=c>";
echo"<tr class=c>
<th class=c>slno</th><th class=c>first name</th><th class=c>last name</th></tr>";
foreach($data as $a){
echo"<tr class=c>";
foreach($a as $v){
echo"<td class=c>".$v."</td>";
}
echo"</tr>";
}
echo"</table>";
?>
</body>
</html>

