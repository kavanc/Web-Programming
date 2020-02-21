<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Find the Latitude and Longitude of your Location!</h1>

<?php
if (!empty($_GET['location'])){
	$location=$_GET['location'];
	
	$maps_url = 'https://'.
	'maps.googleapis.com/'.
	'maps/api/geocode/json'.
	'?address=' . urlencode($location);

$maps_json = file_get_contents($maps_url);
$maps_array = json_decode($maps_json, true);

$lat = $maps_array['results'][0]['geometry']['location']['lat'];
$lng = $maps_array['results'][0]['geometry']['location']['lng'];
$nelat = $maps_array['results'][0]['geometry']['viewport']['northeast']['lat'];
$nelng = $maps_array['results'][0]['geometry']['viewport']['northeast']['lng'];
$swlat = $maps_array['results'][0]['geometry']['viewport']['southwest']['lat'];
$swlng = $maps_array['results'][0]['geometry']['viewport']['southwest']['lng'];
$address=$maps_array['results'][0]['formatted_address'];
}

?>
<form action="" method="get">
	<input type="text" name="location">
	<input type="submit" name="Get GEOCODE!">
<?php
if(!empty($_GET['location'])){
	echo "<br>";
	echo "latitude: " .$lat."<br>";
		echo "longitude: " .$lng."<br>";
		echo "Northeast Latitude and Longitude".$nelat."<br>". $nelng."<br>";		
		echo "Southwest Latitude and Longitude".$swlat."<br>". $swlng."<br>";
		echo $address;

	}
	?>
</form>

<br>
</body>
</html>