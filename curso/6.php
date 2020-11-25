<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While y Do While</title>
</head>
<body>
    <h1>While y Do While</h1>
    <p>Los bucles do-while son muy similares a los bucles while, 
    excepto que la expresión verdadera es verificada al final de 
    cada iteración en lugar que al principio. La diferencia principal 
    con los bucles while es que está garantizado que corra la primera 
    iteración de un bucle do-while (la expresión verdadera sólo es 
    verificada al final de la iteración), mientras que no necesariamente 
    va a correr con un bucle while regular (la expresión verdadera es 
    verificada al principio de cada iteración, si se evalúa como FALSE
     justo desde el comienzo, la ejecución del bucle terminaría inmediatamente).</p>
     <pre>
         $i = 0;
        do {
            echo $i;
        } while ($i > 0);
</pre>
<p>
Los bucles while son el tipo más sencillo de bucle en PHP. 
Se comportan igual que su contrapartida en C. La forma básica de una sentencia while es:
</p>
<pre>
while (expr)
    sentencia
</pre>
</body>
</html>