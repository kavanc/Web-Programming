<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="main.css"/>
	<title></title>
</head>
<body>

<form method='post' action=''>
<h1>BMI Calculator</h1>
<fieldset><legend align="left">Check your BMI Now !</legend>
Weight in lbs:<input type='text' name='weight'><br><br>
Height in inches: <input type='text' name='height'><br><br>
<input type='submit' value='Calculate'><br>
</form>

<?php
if( !empty( $_POST ) ){
$weight=$_POST['weight'];
$height=$_POST['height'];
$bmi=($weight * 705)/(pow($height,2));
echo <<<_END
The answer is: <input type="text" value="$bmi">
_END;
}

?>
<script type="text/javascript">
var bmi = "<?php echo($bmi); ?>";

if (bmi<18.5){
	document.write("You are underweight");
}
else if(bmi>=18.5&&bmi<25.0){
	document.write("You are a healthy weight");
}
else if(bmi>=25.0&&bmi<30){
	document.write("You are overweight");
}
else if(bmi>=30){
	document.write("You are obese");
}
</script>

</body>
</html>