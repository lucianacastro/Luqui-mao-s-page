
<!DOCTYPE html>
<html>
<head>

	<title> Luqui & Mao's wolrd</title>
		<link rel="stylesheet" href="stylesheet.css">
		<link rel="stylesheet" type="text/css" href="slick-1.6.0/slick/slick.css"/>
		<link rel="stylesheet" type="text/css" href="slick-1.6.0/slick/slick-theme.css"/>
		<link href="https://fonts.googleapis.com/css?family=Barrio|Open+Sans|Slabo+27px" rel="stylesheet">

</head>

<body>
	<div class="box-container">
		
		<? include("includes/header.php"); ?>
		<? include("includes/section-carousel.php"); ?>
		<? include("includes/section-luqui.php"); ?>
		<? include("includes/section-mao.php"); ?>
		<? include("includes/section-places.php"); ?>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick-1.6.0/slick/slick.min.js"></script>
<script type="text/javascript" src="efectos.js"></script>

<script type="text/javascript">
$(document).ready(function(){
  $('.carousel').slick({
    dots: true,
    slidesToshow: 1
    //*setting-name: setting-value
  });
});
</script>




</body>



</html>
