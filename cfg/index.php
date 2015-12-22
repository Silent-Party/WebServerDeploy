<?php
/*Benjamin Ohe
 * 21 December 2015
 * ForeFlight
 */
	session_start();
?>
<!DOCTYPE html>
<html>
<style type="text/css">
		body {
			text-align: center;
			color: white;
			background: Black;
		}
</style>
<head>
	<title>PHP Hello World ForeFlight</title>
</head>
<body>
	<main>
		<?php if( isset($_SESSION["been_here"])){
			echo "<h1>Welcome Back</h1>";
		}else{
			echo "<h1>Hello World</h1>";
			$_SESSION["been_here"] = true;
		} ?>
	</main>
</body>
</html>