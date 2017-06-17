<?php
$file = "buttonStatus.txt";
$handle = fopen($file,'w+');
if (isset($_POST['on']))
{
$onstring = "OFF";
fwrite($handle,$onstring);
fclose($handle);
print "
<html>

<body>

<title>RASPOME-DEVICE TURNED OFF</title>

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

<h2>Device-1 Turned </h3><h3>OFF!</h3>
</body>

</html>
";
}
else if(isset($_POST['off']))
{
$offstring = "ON";
fwrite($handle, $offstring);
fclose($handle);
print "
<html>

<body>

<title>RASPOME-DEVICE TURNED ON</title>

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

<h2>Device-1 Turned </h3><h3>ON!</h3>
</body>

</html>
";
}
?>