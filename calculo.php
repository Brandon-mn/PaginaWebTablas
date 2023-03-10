<!DOCTYPE html>
<html>
  <head> 
  <title>CALIFICAR</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
  <link href="style.css" rel="stylesheet">
    
  </head>
  <body bgcolor= #abdbe3> 
  <div class="container text-center">
  
    <h1>Resultados</h1>
    <?php
    $puntos=0;
    $contador=$_GET["tabla"];
    $rango1=$_GET["rango1"];
    $rango2=$_GET["rango2"];
    $cantidad=0;
    if($rango1>$rango2){
      $cantidad=($rango1-$rango2) + 1;
      echo'
              
      <div class="row justify-content-md-center " >
         <div class="col-3 rounded-start-3  style= border border-dark" style=background-color:#fad26b >
          TABLA
         </div>
         <div class="col-3 rounded-end-3 style= border border-dark"style=background-color:#fad26b>
         RESULTADOS
         </div> 
      </div>
      ';
        for ($rango2; $rango2 <=$rango1 ; $rango2++) { 
            $resultados=$_GET["x".$rango2];
            $multiplicacion= ($contador*$rango2);
            if ($resultados == $multiplicacion) {
              $puntos++;
            }
            if($resultados == $multiplicacion)
            {
              echo'
              
              <div class="row justify-content-md-center " >
                 <div class="col-3 rounded-start-3  style= border border-dark" style=background-color:#E5E8E8 >
                  '.$contador.'x'.$rango2.'=
                 </div>
                 <div class="col-3 rounded-end-3 style= border border-dark"style=background-color:#33FF55>
                  '.$resultados.'<i class="bi bi-check-circle"></i>
                 </div> 
              </div>
              ';
           
            }
            else
            {
              echo'
              <div class="row justify-content-md-center" >
                 <div class="col-3 rounded-start-3  style= border border-dark"style= background-color:#E5E8E8 >
                  '.$contador.'x'.$rango2.'=
                 </div> 
                 <div class="col-3  rounded-end-3 style= border border-dark"style=background-color:#F93724 >
                  '.$resultados.'<i class="bi bi-x-circle"></i>
                 </div>  
              </div>';
            }
              
           }
           echo '
           <div class="row justify-content-md-center" >
           <div class="col-3 rounded-start-3 style= border border-dark"style= background-color:#E5E8E8>
           puntaje es : '.$puntos.' de '.$cantidad.'
           </div>';
    }
    else if($rango2>$rango1){
      $cantidad=($rango2-$rango1) + 1;
      echo'
              
      <div class="row justify-content-md-center " >
         <div class="col-3 rounded-start-3  style= border border-dark" style=background-color:#fad26b >
          TABLA
         </div>
         <div class="col-3 rounded-end-3 style= border border-dark"style=background-color:#fad26b>
         RESULTADOS
         </div> 
      </div>
      ';
        for ($rango1; $rango1 <=$rango2 ; $rango1++) { 
            $resultados=$_GET["x".$rango1];
            $multiplicacion= ($contador*$rango1);
            if ($resultados == $multiplicacion) {
              $puntos++;
            }
            if($resultados == $multiplicacion)
            {
              echo'
              <div class="row justify-content-md-center" >
                 <div class="col-3 rounded-start-3  style= border border-dark" style=background-color:#E5E8E8 >
                  '.$contador.'x'.$rango1.'=
                 </div>
                 <div class="col-3 rounded-end-3  style= border border-dark"style=background-color:#33FF55>
                  '.$resultados.'<i class="bi bi-check-circle"></i>
                 </div> 
              </div>';
           
            }
            else
            
            {
              echo'
              <div class="row justify-content-md-center" >
                 <div class="col-3 rounded-start-3 style= border border-dark"style= background-color:#E5E8E8 >
                  '.$contador.'x'.$rango1.'=
                 </div> 
                 <div class="col-3  rounded-end-3 style= border border-dark"style=background-color:#F93724 >
                  '.$resultados.'<i class="bi bi-x-circle"></i>
                 </div>  
              </div>';
            }
            
        }
        echo '
        <div class="row justify-content-md-center" >
        <div class="col-3 rounded-start-3 style= border border-dark"style= background-color:#E5E8E8>
        puntaje es : '.$puntos.' de '.$cantidad.'
        </div>';

    }
      $servername = "localhost";
      $database = "tablasmultiplicar";
      $username = "root";
      $password = "";
      $conn = mysqli_connect($servername, $username, $password, $database);
      
?>
</div>

</body>
</html>