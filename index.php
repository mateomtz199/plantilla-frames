<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de3 PHP de Melina</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<div class="flex-container">
    <header class="item">
        <img src="img/header.jpg" alt="" class="imagen">
        <div class="contenedor-titulo">
        <a href="?pagina=1"><div class="titulo">Iniciar el curso</div></a>
        </div>
      <h1>Header</h1>
      <nav>
       Melina
      </nav>
    </header>

    <aside>
    <ul>
            <li><a href="?pagina=1">Introducción</a></li>
            <li><a href="?pagina=2">Declarar Variables y Concatenar</a></li>
            <li><a href="?pagina=3">Condicionales</a></li>
            <li><a href="?pagina=4">Switch</a></li>
            <li><a href="?pagina=5">Operadores</a></li>
            <li><a href="?pagina=6">While y Do While</a></li>
            <li><a href="?pagina=7">Mezclar HTML/Array o Arreglos</a></li>
            <li><a href="?pagina=8">For y Foreach</a></li>
            <li><a href="?pagina=9">Arreglos Asociativos</a></li>
            <li><a href="?pagina=10">Include y Required</a></li>
            <li><a href="?pagina=11">Funciones</a></li>
        </ul>
    </aside>

    <section id="cuerpo" class="item">
        <?php
            @$pagina=$_GET['pagina'];
            switch($pagina){
                case '1': 
                    include ("curso/1.php");
                break;
                case '2':
                    include ("curso/2.php");
                break;
                case '3':
                    include ("curso/3.php");
                break;
                case '4':
                    include ("curso/4.php");
                break;
                case '5':
                    include ("curso/5.php");
                break;
                case '6':
                    include ("curso/6.php");
                break;
                case '7':
                    include ("curso/7.php");
                break;
                case '8':
                    include ("curso/8.php");
                break;
                case '9':
                    include ("curso/9.php");
                break;
                default:
                include ('curso/inicio.php');


            }
        ?>
        
    </section>
   
    <footer class="item">Pie</footer>		
</div>
    
</body>
</html>