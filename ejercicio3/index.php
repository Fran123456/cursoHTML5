<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Mi pagina</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/css/mdb.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  </head>
  <body>

<style media="screen">
.fade {
  opacity: 0;
  transition: opacity .15s linear;
  transition-property: opacity;
  transition-duration: 0.75s;
  transition-timing-function: linear;
  transition-delay: initial;
}

</style>
   <?php

   error_reporting(0);

    ?>


   <div class="container">
     <br>
     <br>
     <div class="row">
       <div class="col-sm-4">
           <form method="post" name="for">
              <p class="h4 text-center mb-4">Tabla de multiplicar</p>
              <br>
              <label  class="grey-text">Tabla que desea visualizar</label>
              <input required type="number" value="<?php echo $_POST['number']; ?>" name="number" class="form-control">
              <br>
              <label  class="grey-text">Desde que número iniciara la tabla</label>
              <input required type="number" value="<?php echo $_POST['inicio']; ?>" name="inicio" class="form-control">
              <br>
              <label  class="grey-text">Hasta que número desea llegar</label>
              <input required type="number" value="<?php echo $_POST['hasta']; ?>" name="hasta" class="form-control">
              <br>
              <label  class="grey-text">Incremento</label>
              <input required type="number" value="<?php echo $_POST['incremento']; ?>" name="incremento" class="form-control">
              <div class="text-center mt-4">
                  <button class="btn btn-indigo" type="submit">calcular</button>
              </div>
           </form>
       </div>

        <?php


          $k = $_POST['incremento'];
          $numero = $_POST['number'];
          $hasta= $_POST['hasta'];
          $inicio = $_POST['inicio'];

         ?>

          <div class="col-sm-8 text-center">
          <ul class="list-group">
            <?php
            $hasta= $_POST['hasta'];
            $inicio = $_POST['inicio'];
                 if($inicio > $hasta){
                     echo '<div class="alert alert-success alert-dismissible fade show " id="myAlert">
                         <button type="button" class="close">&times;</button>
                         <strong>Error el intervalo no esta correcto</strong>
                       </div>';
                   }
             ?>
            <?php
            if(isset($_POST['incremento']))
            {



                while ($inicio <= $hasta ) {
                   $total = 0;
                  $total = $numero * $inicio;

                //  echo "<li class='list-group-item'>" . $numero . "  *  " .  $inicio . " = " .$total . "</li>";
                echo '<div class="alert  alert-secondary alert-dismissible fade show " id="myAlert2">
                    <button type="button" class="close">&times;</button>
                    <strong> '  . $numero . "  *  " .  $inicio . " = " .$total .  ' </strong>
                  </div>';
                  $inicio = $inicio + $k;
                }
              }
              else {
                echo '<div class="alert alert-info alert-dismissible fade show " id="myAlert3">
                    <button type="button" class="close">&times;</button>
                    <strong>Debe ingresar los campos</strong>
                  </div>';
              }

             ?>
            </ul>
         </div>

     </div>
   </div>

<script type="text/javascript">
var num1 = 0;
var num2 = 0;
 num1= document.for.inicio.value;
 num2= document.for.hasta.value;
if( num1 > num2)
{
  $(document).ready(function(){
      $(".close").click(function(){
          $("#myAlert").alert("close");
      });
  });
}
</script>

<script type="text/javascript">

  $(document).ready(function(){
      $(".close").click(function(){
          $("#myAlert2").alert("close");
      });
  });

</script>


<script type="text/javascript">

  $(document).ready(function(){
      $(".close").click(function(){
          $("#myAlert3").alert("close");
      });
  });

</script>



  </body>
</html>
