<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Codes d'accès au serveur central de la NASA</title>
    </head>
    <body>
    
        <?php
    if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "ADMIN") // Si le mot de passe est bon
    {
    // On affiche les codes
    ?>
    <div style="display: flex;justify-content: center;">
        <h1>Voici les codes d'accès :</h1>
    </div>

    <div style="display: flex;justify-content: center;">
        <p><strong>CRD5-GTFT-CK65-JOPM-V29N-24G1-HH28-LLFV</strong></p> 
    </div>  
        
    <div style="display: flex;justify-content: center;">
        <p>
        Cette page est réservée au personnel de la NASA. 
        </p>
    </div>

    <div style="display: flex;justify-content: center;">
        <p>
        N'oubliez pas de la visiter régulièrement car les codes d'accès sont changés toutes les semaines.
        </p>
    </div>

    <div style="display: flex;justify-content: center;">
        <p>
        La NASA vous remercie de votre visite.
        </p>
    </div>
    
        <?php
    }
    else // Sinon, on affiche un message d'erreur
    {
        echo '<b style="display: flex;justify-content: center;">Mot de passe incorrect</b>';
    }
    ?>
    
        
    </body>
</html>