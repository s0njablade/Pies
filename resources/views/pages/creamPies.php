<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pies</title>

    </head>
    <body>
        <h1>Cream Pies</h1>
        <p>Here are our seasonal cream pies</p>
        <ul>
            <li><?php echo $bananaCreamPie ?></li>
            <li><?php echo $coconutCreamPie ?></li>
            <!-- <li>{{coconut }}</li> -->
        </ul>


    </body>
</html>
