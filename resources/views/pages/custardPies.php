<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pies</title>

    </head>
    <body>
        <h1>Custard Pies</h1>
        <p>Here are our seasonal custard pies</p>
        
    <?php
   
        echo $saltedHoney->getPieFlavor();


    ?>

    </body>
</html>