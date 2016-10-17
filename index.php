<!DOCTYPE html>
<html>
<head>
	<title>App PHP</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="style.css" />
</head>
<body>
<?php
$servername = "us-cdbr-iron-east-04.cleardb.net";
$username = "b125372f22b89b";
$password = "b4ee5c03";

$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error){
echo "Something wrong"
} else {
echo "Hello world"
}
?>
	<table>
		<tr>
			<td style='width: 30%;'>
				<img class = 'newappIcon' src='images/cloud.jpg'>
			</td>
			<td>
				<h1 id = "message"><?php echo "Test de liaison BD cloud avec Bluemix V1"; ?></h1>
			</td>
		</tr>
	</table>
</body>
</html>
