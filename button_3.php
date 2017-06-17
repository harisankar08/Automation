<?php
$file_3 = "buttonStatus_3.txt";
$handle_3 = fopen($file_3,'w+');
if (isset($_POST['on_3']))
{
$onstring_3 = "OFF_3";
fwrite($handle_3,$onstring_3);
fclose($handle_3);
print "
<html>

<body>

<title>RASPOME-DEVICE_3 TURNED OFF</title>

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

<h2>Device_3 Turned </h3><h3>OFF!</h3>
</body>

</html>
";
}
else if(isset($_POST['off_3']))
{
$offstring_3 = "ON_3";
fwrite($handle_3, $offstring_3);
fclose($handle_3);
print "
<html>

<body>

<title>RASPOME-DEVICE_3 TURNED ON</title>

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

<h2>Device_3 Turned </h3><h3>ON!</h3>
</body>

</html>
";
}
?>
