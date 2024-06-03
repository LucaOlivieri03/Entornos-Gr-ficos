<!DOCTYPE html>
<html lang="es">
<head>
    <?php 

    if(isset($_POST['borrarcookie'])){
        setcookie("noticia",'',time()-100);
        $seguro = true;
    }
    
    if(isset($_POST['boton'])){
       $noticia = $_POST['noticia'];
       setcookie("noticia", $_POST['noticia'], time() + 60 * 60 * 24 * 150);
    } else if (isset($_COOKIE['noticia']) && !isset($seguro)){
        $noticia = $_COOKIE['noticia'];
    } 
    
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
   <h1>Qué noticia desea ver?</h1>
   <form method="post">
        <input type="radio" value="politica" name="noticia">
        <label for="noticia">Noticia Política</label>

        <input type="radio" value="economica" name="noticia">
        <label for="noticia">Noticia Económica</label>

        <input type="radio" value="deportiva" name="noticia">
        <label for="noticia">Noticia Deportiva</label>
        <button type="submit" name="boton">Enviar</button>
   </form>

   <section>
    <br>

    <?php

    if(isset($noticia)){
        if($noticia == "politica"){
        ?>
            <div style="height: 100px;">
              <h3>Perón ha vuelto!!</h3>
              <p>Lo que leiste, volvió el más peronista de todos, el mismisimo Perón.</p>
            </div>
     
        <?php
        } else if ($noticia == "economica"){
            ?>
                <div style="height: 100px;">
                    <h3>1 a 1</h3>
                    <p>El día de hoy el dólar oficialmente vale 1 peso.</p>
                </div>
        <?php
        } else {
            ?>
                <div style="height: 100px;">
                    <h3>Newells campeón de la libertadores</h3>
                    <p>Con gol de Lionel Messi, Newells consagró el mayor título en su historia. </p>
                </div>
        <?php
        }
    } else {
        ?>
        <div style="height: 100px;">
              <h3>Perón ha vuelto!!</h3>
              <p>Lo que leiste, volvió el más peronista de todos, el mismisimo Perón.</p>
        </div>

        <div style="height: 100px;">
                    <h3>1 a 1</h3>
                    <p>El día de hoy el dólar oficialmente vale 1 peso.</p>
        </div>

        <div style="height: 100px;">
                    <h3>Newells campeón de la libertadores</h3>
                    <p>Con gol de Lionel Messi, Newells consagró el mayor título en su historia. </p>
        </div>

    <?php
    }
    ?>

   </section>

   <form method="post">
        <button type="submit" name="borrarcookie">BORRAR PREFERENCIA</button>
   </form>

</body>
</html>


