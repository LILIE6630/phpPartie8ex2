<?php
session_start();
$_SESSION['lastname'] = 'LOLO';
$_SESSION['firstname'] = 'Lilie';
$_SESSION['age'] = 30;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="../assets/librairies/bootstrap-4.3.1-dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="../assets/css/style.css" />
        <title>PHP ex2</title>
    </head>
    <body class="bg-dark text-light">
        <canvas id="myCanvas" height="600" width="1300"></canvas>
        <div class="content">
            <p>  
                Sur la page index, faire un liens vers une autre page. 
                Passer d'une page à l'autre le contenu des variables lastname, firstname et age grâce aux sessions. 
                Ces variables auront été définies directement dans le code.
                Il faudra afficher le contenu de ces variables sur la deuxième page.</p>

            <a href="http://partie8/p08ex02/index1.php">-> votre contenu de session</a>


        </div>
        <script src="../assets/js/jquery-3.4.1.min.js"></script>
        <script src="../assets/librairies/bootstrap-4.3.1-dist/js/bootstrap.min.js" rel="stylesheet"></script>
        <script src="../assets/js/script.js"></script>
    </body>
</html>

