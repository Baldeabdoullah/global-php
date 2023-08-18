<?php

// les variables glo bales sont des variables accessibles sur tout l'etendu du projets (toutes les pages)

//var_dump($_SERVER);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <li>Host : <?php echo  print_r($_SERVER['HTTP_HOST'])  ?></li>
        <li>Info serveur : <?php echo  print_r($_SERVER['SERVER_SIGNATURE'])  ?></li>
        <li>Root : <?php echo  print_r($_SERVER['CONTEXT_DOCUMENT_ROOT'])  ?></li>
        <li>Application serveur : <?php echo  print_r($_SERVER['SERVER_SOFTWARE'])  ?></li>
    </ul>

</body>

</html>