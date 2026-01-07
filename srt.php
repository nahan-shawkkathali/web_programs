<?php
$Students=array("ti"=>"Tina","du"=>"Duna","ai"=>"Aira","ze"=>"Zera");
echo"<h1>STUDENT NAMES</h1>";
echo"<h2>";
echo"<pre>";
print_r($Students);
echo"</pre>";
echo"<br><br>";
echo"Student name using asort:<br>";
asort($Students);
echo"<pre>";
print_r($Students);
echo"</pre>";
echo"<br><br>";
echo"Student name using arsort:<br>";
arsort($Students);
echo"<pre>";
print_r($Students);
echo"</pre>";
echo"</h2>";
?>
