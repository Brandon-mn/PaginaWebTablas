<!DOCTYPE html>
<html>

    <head>
    <title> PROCESAR TABLA </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body bgcolor= #abdbe3>
    <center>  
    <H1>IINTRODUZCA SUS RESPUESTAS</H1>
   <form action = "calculo.php" method="get">
         <?php
             $nombre =$_GET["nombre"];
             $correo =$_GET["correo"];
          $tabla=$_GET["tabla"];
          echo'
          <input type = "hidden" id="tabla" name ="tabla"
          value ="'.$tabla.'">
          ';
          $rango1 = $_GET["rango1"];
          echo'
          <input type = "hidden" id="rango1" name ="rango1"
          value ="'.$rango1.'">
          ';
          $rango2 =$_GET["rango2"];
          echo'
          <input type = "hidden" id="rango2" name ="rango2"
          value ="'.$rango2.'">
          ';

          if ($rango2 > $rango1) {
            for($i=$rango1; $i <= $rango2; $i++){
              echo'
              <label for= "fname">'.$tabla.'x'.$i.':</label>
              <input type = "text" id="x'.$i.'"
              name="x'.$i.'"
              value =""><br>
              ';
            }
          }
          else{
            for($i=$rango1; $i >= $rango2; $i--){
              echo'
              <label for= "fname">'.$tabla.'x'.$i.':</label>
              <input type = "text" id="x'.$i.'"
              name="x'.$i.'"
              value =""><br>
              ';
            }
          }
            
        ?>
        <br>
       <input type="submit" value = "CALIFICAR"class="btn btn-outline-primary btn-lg">
     </form>
          </center>
     </body>
</html>