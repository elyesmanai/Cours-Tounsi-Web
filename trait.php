<?php

$name = $_POST['nom'];
$mail = $_POST['mail'];
$tel = $_POST["tel"];


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p>votre nom est : <?php echo $name;  ?> </p><br>
	<p>votre mail est :<?php echo $mail;  ?></p><br>
	<p>votre tel est : <?php echo $tel;  ?></p><br>
</body>
</html>

