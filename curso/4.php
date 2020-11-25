<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    <h1>Switch</h1>
    <p>La sentencia switch es similar a una serie de sentencias IF 
        en la misma expresión. En muchas ocasiones, es posible que se
         quiera comparar la misma variable (o expresión) con muchos 
         valores diferentes, y ejecutar una parte de código distinta 
         dependiendo de a que valor es igual. Para esto es exactamente 
         la expresión switch.</p>
        <p>Ejemplo</p>
        <pre>
        if ($i == 0) {
            echo "i es igual a 0";
        } elseif ($i == 1) {
            echo "i es igual a 1";
        } elseif ($i == 2) {
            echo "i es igual a 2";
        }

        switch ($i) {
            case 0:
                echo "i es igual a 0";
                break;
            case 1:
                echo "i es igual a 1";
                break;
            case 2:
                echo "i es igual a 2";
                break;
        }
        </pre>
</body>
</html>