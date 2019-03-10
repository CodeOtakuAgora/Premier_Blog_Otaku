<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>PROJETS</title>
    <link rel="stylesheet" type="text/css" href="css/cookie.css">

    <?php   include("autres/config.php"); ?>
    <?php   include("php/infos.php"); ?>
</head>
<body>

<?php  	include("php/menu.php"); ?>
<?php   include('php/user_nbr_live.php'); ?>


<?php
$bdd = new PDO("mysql:host=localhost;dbname=primfx;charset=utf8","root","");
//$bdd = new PDO("mysql:host=localhost;dbname=primfx;charset=utf8","root","");
if(isset($_POST['pseudo']) AND isset($_POST['message']) 
   AND !empty($_POST['pseudo']) AND !empty($_POST['message']))
{
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $message = htmlspecialchars($_POST['message']);
    $insertmsg = $bdd->prepare('INSERT INTO chat(pseudo, message) VALUES(?, ?)');
    $insertmsg->execute(array($pseudo, $message));
}
?>
<p align="center">Page 1 - Actuellement <b><?php echo $user_nbr; ?> utilisateur<?php if($user_nbr != 1) { echo "s"; } ?> </b>en ligne</p><br/><br/>

<div align="center">
    <a href="espaceMembre/inscription.php">
        <img src="images/espace_membre.png" width="300" height="200"> 
    </a>  
</div><br/><br/> 

<form method="post" action="">
    <input type="text" name="pseudo" placeholder="PSEUDO" 
           value="<?php if(isset($pseudo)) {echo $pseudo; } ?>"><br/>
    <textarea type="text" name="message" placeholder="MESSAGE"></textarea><br/>
    <input type="submit" name="Envoyer">
</form>


<div id="messages"><br>
    <?php
$bdd = new PDO("mysql:host=localhost;dbname=primfx;charset=utf8","root","");    
$allmsg = $bdd->query('SELECT * FROM chat ORDER BY id DESC LIMIT 0, 5');
    while ($msg = $allmsg->fetch()) 
    {	
    ?>
        
    <b style="display: flex;justify-content: center;"> <?php echo $msg['pseudo']; ?> : 
    <?php echo $msg['message']; ?> </b> <br/>

    <?php
    }
    ?>

</div>

<script>
    setInterval('load_messages()', 500);
    function load_messages()
    {
        $('#messages').load('autres/load_messages.php');
    }
</script>


<br/><br/><br/>

<form name="input" action="autres/cible.php" method="post">
        Nom : <input type="text" name="nom"><br/>
        Prénom : <input type="text" name="prenom"><br/>
        Age : <input type="text" name="age"><br/>
  
        Etes-Vous végétarien ?
       <input type="checkbox" name="oui"><br/><br/>
    <input type="submit" value="Valider"/>
</p>
</form>

<br/><br/><br/>

        <p align="center">Veuillez entrer le mot de passe pour obtenir les codes d'accès au serveur central de la NASA :</p>
        <form action="autres/secret.php" method="post">
            <p>
            <input type="password" name="mot_de_passe" />
            <input type="submit" value="Valider" />
            </p>
        </form>
        <p align="center">Cette page est réservée au personnel de la NASA. Si vous ne travaillez pas à la NASA, inutile d'insister vous ne trouverez jamais le mot de passe !</p>


<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

<?php if(!isset($_COOKIE['cdd'])): ?>
    <div class="cookie-alert">
        <p style="font-size: 18px;">Mon site utilise des cookies pour vous offrir le meilleur service possible. En continuant votre navigation, vous en acceptez l'utilisation.  
            <a href="php/accept_cookie.php">OK</a></p>
    </div>
<?php endif; ?>

<?php include("php/footer.php"); ?>


</body>
</html>

