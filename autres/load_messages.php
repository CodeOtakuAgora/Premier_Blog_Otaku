	<?php

$bdd = new PDO("mysql:host=localhost;dbname=primfx;charset=utf8","root","");
	$allmsg = $bdd->query('SELECT * FROM chat ORDER BY id DESC LIMIT 0, 5');
	while ($msg = $allmsg->fetch()) 
{

	?>

	<?php echo "<br/>"; ?>

	<div align="center">
	
		<b style="display: flex;justify-content: center;"> <?php echo $msg['pseudo']; ?> :
		<?php echo $msg['message']; ?></b>

	</div>
	<br/>

	<?php
}
	?>