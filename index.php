<?php /*esto inicia un bloque de código en php*/

<<<<<<< HEAD
    $user = $_GET['usuario'];
    $pass = $_GET['contraseña']; /*guarda la variable $pass*/

/*si el usuario y clave no coinciden entonces terminamos o enviamos un mensaje de error*/
if($user != "PerlaGCastillo" ||$pass !="12357"){
    echo "lo siento hermano, no estas autorizado";
} else { /*inicia bloque autorizado*/


/*si llegamos hasta aquí, es porque el suario es valedor y continuamos!*/
    
    /* == comparar*/
    /* && y - forzar */
    /*echo $_GET["usuario"]; 
    
    echo nos permite imprimir resultados como en el document.write*/
=======
echo "funciona php"; 
    /*echo nos permite imprimir resultados 
    "como en el document.write"*/


>>>>>>> 2305469a8a4fa5ad7ddad3e12bfca17c5b0ec23d
/*esto inicia un bloque de código en php*/
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
     <link rel="stylesheet" href="css/main.css"> 
   <title>index</title>
</head>

<body>
    <header> <!-- encabezado -->
                <aside> <span class="naranja">Mi primer login</span> </aside>
                <nav>
                    <a class="activo" href="index.html">Inicio</a>
                    |   
                    <a href=" ">Ingresar</a>
                    |
                    <a href=" ">Nuevo usuario</a>
                </nav>
    </header>

        <div id="contenido">
            <p > felicidades, bienvenidoas a mi mundo </p><!--termina contenido-->
        <footer>
             <p>Copyleft: TDW2.0</p>
        </footer>
</body>
</html>
<<<<<<< HEAD


<?php
} /*termina bloque autorizado*/
?>
=======
>>>>>>> 2305469a8a4fa5ad7ddad3e12bfca17c5b0ec23d
