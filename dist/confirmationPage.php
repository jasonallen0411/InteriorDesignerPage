<!DOCTYPE html>
<html>
<head>
	<title>Interior Design Midterm Confirmation</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="styles/main.css">
	<link rel="stylesheet" type="text/css" href="styles/animate.css">
</head>
<body>

<?php
$to = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
// $headers = "MIME-Version: 1.0" . "\r\n";
// $headers .= "Content-type:text/html;charset=UTF-8";
mail($to, $subject, $message);
?>


		

  <h1 id="confirmation">Confirmation</h1>
  <h2 id="confirmed">Thank you, <?php echo $_POST['name']; ?> , an email has been sent to: <?php echo $_POST['email']; ?> to show that you have contacted me. I'll get back to you ASAP! </h2>



  

  


	
	






	

	


<script src="JQuery/jquery.min.js"></script>
<script src="JQuery/TweenMax.min.js"></script>	
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="scripts/skrollr.min.js"></script>
<script src="scripts/main.js"></script>
</body>
</html>