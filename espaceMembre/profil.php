<?php    include("php/menu.php"); ?>
<?php    include("php/infos.php"); ?>

<?php
session_start();

$bdd = new PDO("mysql:host=localhost;dbname=primfx;charset=utf8","root","");
if(isset($_GET['id']) AND $_GET['id'] > 0) 
{
   $getid = intval($_GET['id']);
   $requser = $bdd->prepare('SELECT * FROM membres WHERE id = ?');
   $requser->execute(array($getid));
   $userinfo = $requser->fetch();
?>
<html>
   <head>
      <title>TUTO PHP</title>
      <meta charset="utf-8">
   </head>
   <body>
      <div align="center">
         <h2>Profil de <?php echo $userinfo['pseudo']; ?></h2>
         <br /><br />
         <?php
            if(!empty($userinfo['avatar']))
            {
               ?>
               <img src="membres/avatar/<?php echo $userinfo['avatar']; ?>" width="500">
               <?php
            }
         ?>
         <br/><br/>
         Pseudo = <?php echo $userinfo['pseudo']; ?>
         <br />
         Mail = <?php echo $userinfo['mail']; ?>
         <br />
         <?php
         if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']) {
         ?>
         <br />
         <a href="editionprofil.php">Editer mon profil</a>
         <a href="deconnection.php">Se déconnecter</a>
         <?php
         }
         ?>
      </div>
      <?php    include("php/footer.php"); ?>   
</body>
</html>
<?php
}
?>

