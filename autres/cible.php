<html>

<head>

<meta charset="utf-8">

</head>

<body>
<div align="center">
	<p>Bonjour <?php echo htmlspecialchars($_POST["nom"] . ' ' . $_POST["prenom"]); ?></p>
	<p>Je vois que vous avez <?php echo htmlspecialchars($_POST["age"]); ?> ans.</p>

	<?php
	if (isset($_POST['vegetarien']))
	{
		echo '<p>Vous êtes donc végétarien. </p>';
	}
	else
	{
		echo '<p>Vous n\'êtes pas végétarien, vous pouvez donc manger de la viande.</p>';
	}
?>

</div>

</body>

</html>