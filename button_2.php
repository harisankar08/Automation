<?php
$file_2 = "buttonStatus_2.txt";
$handle_2 = fopen($file_2,'w+');
if (isset($_POST['on_2']))
{
$onstring_2 = "OFF_2";
fwrite($handle_2,$onstring_2);
fclose($handle_2);
print "
<html>

<body>

<title>RASPOME-DEVICE_2 TURNED OFF</title>

<style type=text/css>

h1
{

position: absolute;

top: 170px;
	
left: 430px;
	
color : blue;
border: 4px solid red;
}

h2
{
	
position: absolute;
	
top: 250px;
	
left: 579px;

}


h3
{
position: absolute;
	
top: 256px;
	
left: 760px;

color : RED;
}
</style>

<h1>  RASPOME - HOME AUTOMATION</h2>

<h2>Device_2 Turned </h3><h3>OFF!</h3>
</body>

</html>
";
}
else if(isset($_POST['off_2']))
{
$offstring_2 = "ON_2";
fwrite($handle_2, $offstring_2);
fclose($handle_2);
print "
<html>

<body>

<title>RASPOME-DEVICE_2 TURNED ON</title>

<style type=text/css>

h1
{

position: absolute;

top: 170px;
	
left: 430px;
	
color : blue;
border: 4px solid green;
}

h2
{
	
position: absolute;
	
top: 250px;
	
left: 579px;

}


h3
{
position: absolute;
	
top: 256px;
	
left: 760px;

color : green;
}
</style>

<h1>  RASPOME - HOME AUTOMATION</h2>

<h2>Device_2 Turned </h3><h3>ON!</h3>
</body>

</html>
";
}
?>
