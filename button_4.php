<?php
$file_4 = "buttonStatus_4.txt";
$handle_4 = fopen($file_4,'w+');
if (isset($_POST['on_4']))
{
$onstring_4 = "OFF_4";
fwrite($handle_4,$onstring_4);
fclose($handle_4);
print "
<html>

<body>

<title>RASPOME-DEVICE_4 TURNED OFF</title>

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

<h2>Device_4 Turned </h3><h3>OFF!</h3>
</body>

</html>
";
}
else if(isset($_POST['off_4']))
{
$offstring_4 = "ON_4";
fwrite($handle_4, $offstring_4);
fclose($handle_4);
print "
<html>

<body>

<title>RASPOME-DEVICE_4 TURNED ON</title>

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

<h2>Device_4 Turned </h3><h3>ON!</h3>
</body>

</html>
";
}
?>
