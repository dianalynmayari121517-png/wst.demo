<?php
$username = "BSIT-NT 3102";
$user_id = 12345678;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>demo.php </title>
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
	<a href="new.page.php">Click to next</a>
 <!--<h1> Hello world </h1> -->
    <?php //echo "<h1>Hello World<?h1>"; ?>

  <h1>Username: <u><?php echo $username; ?><u></h1>
  <h1>User_id: <u><?php echo $user_id; ?><u></h1>

  <button type="button" onclick= "greetuser()">Click here</button>

<script>
	const username ="<?php echo $username?>";
	const userid= "<?php echo $user_id?>";

	function greetuser(){
		alert("Hello"+username+ "!" + " your user id is: "+ userid);
	}
</script
</body>
</html>