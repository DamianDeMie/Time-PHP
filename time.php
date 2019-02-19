<?php 

$page = $_SERVER['PHP_SELF'];
$sec = "1";

date_default_timezone_set('Europe/Amsterdam');
if (date("H") < 6) {
	echo "Goedenacht! <br>";
	$imageURL = "images/night.png";
}

elseif (date("H") < 12){
	echo "Goedemorgen! <br>";
	$imageURL = "images/morning.png";
}

elseif (date("H") < 18){
	echo "Goedemiddag! <br>";
	$imageURL = "images/afternoon.png";
}

elseif (date("H") < 24){
	echo "Goedeavond! <br>";
	$imageURL = "images/evening.png";
}


echo "Het is nu ";
echo date("H:i:s");
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<title>Tijd</title>
</head>
<body>

</body>
</html>

<style>
	 body {
	 background-image: url(<?php echo $imageURL;?>);
	 color: white;
	 text-align: center;
	 font-size: 10vh;
	 padding-top: 30vh;
	 font-family: 'Roboto', sans-serif;
}