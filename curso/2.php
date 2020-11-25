<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Declarar Variables y Concatenar</title>
</head>

<body>
    <h1>Declarar Variables y Concatenar</h1>
    <p>Para declarar variables en php debemos anteponer el signo $ al nombre de la misma,
        para asignarle un valor continuamos con el signo igual y el valor de la misma,
        en caso de ser un texto va a ir entre comillas en caso de ser un número no se
        deben poner las comillas sino lo tomará como texto:</p>
    <pre>php $usuario=”administrador”;</pre>
    <p>Para concatenar variables en php debemos usar el signo “.”(punto), por ejemplo
        crearé 3 variables, la primera y la segunda las concatenaré en la tercera:</p>
    <pre>
    $texto1=”Estamos concatenando “;
    $texto2=”un texto”;
    $texto3=$texto1.$texto2;
    </pre>
</body>

</html>