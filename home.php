<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>Projet 1 Php</title>
</head>
<body>
<?php 
    
    require_once "Class/Form.php";

         $form = new Form($_POST);
?>
    <div class=container>
        <h1>Home Page</h1>

        <h1>

            <?php

                // if (isset($_POST['Nom']) && isset($_POST['Prénom'])){
                //     echo "Bienvenue "." ".$_POST['Nom']." ".$_POST['Prénom'];
                // } else {
                //     echo "Merci de remplir les informations";
                // }

                echo (isset($_POST['Nom']) && isset($_POST['Prénom'])) ? "Bienvenue "." ".$_POST['Nom']." ".$_POST['Prénom'] :  "Merci de remplir les informations"
            
            ?>
            </h1>

        <div class=input>


            <form action="#" method="post">
            
        <?php 
                $form->createInput('Nom', 'input' );
                $form->createInput('Prénom', 'input');

                $form->createSubmit('Connexion');
        ?>

    
</form>

            
            <a href="#!">Mot de passe oublié ?</a>
        </div>

            <img src="undraw_year_2022_uci7.svg" alt="Image 2022">

        </div>



       
   



</body>
</html>


