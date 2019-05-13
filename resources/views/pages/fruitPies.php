<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pies</title>

    </head>
    <body>
        <h1>Fruit Pies</h1>
        <p>Here are our seasonal fruit pies</p>
        <ul>
            <li><?php echo $blueberryLavender ?></li>
            <li><?php echo $strawberryRhubarb ?></li>
            <!-- <li>{{$strawberryRhubarb}}</li>
            <li></li> -->
        </ul>
        


    </body>
</html>
