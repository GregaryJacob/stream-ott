<?php

/**
 * @author lolkittens
 * @copyright 2020
 */



?>

<!DOCTYPE HTML>
<html>

<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="lolkittens" />

	<title>Untitled 2</title>
</head>
<style>
.center {
width: 600px;
	height: 200px;
	
	position: absolute;
	top:0;
	bottom: 0;
	left: 0;
	right: 0;
  	text-align: center;
	margin: auto;
}
</style>
<body onload="myFunction()">

<div class="center">
<img src="sample.gif"/>
<h4>
 Please do not refresh the page and wait while we are<br />
          processing your payment. This can take a few minutes.
</h4>

</div>
<script>

function myFunction() {
    setTimeout(function(){ 

      window.location.href = "susses.php";

}, 3000);
}
</script>
</body>
</html>