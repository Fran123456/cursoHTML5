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

   //error_reporting(0);

    ?>


   <div class="container">
     <br>
     <br>
     <div class="row">
       <div class="col-sm-4">
           <form method="post" name="for">
              <p class="h4 text-center mb-4">CONVERSOR DE EURO A DOLAR Y DOLAR A EURO</p>
              <br>

              <label  class="grey-text">Cantidad a convertir</label>
              <input required type="number"  step="any" value="<?php echo $_POST['number']; ?>" name="number" class="form-control">
              <br>

              <label  class="grey-text">Divisa</label>
              <select name="select" class="form-control">
                <option value="1">Dolar</option>
                <option value="2" >Euro</option>
                <option value="3" >Real (Brazil)</option>
                <option value="4">Quetzal</option>
                <option value="5">Nuevo Sol</option>
              </select>
              <br>

              <label  class="grey-text">Pasar a</label>
              <select name="select2" class="form-control">
                <option value="1">Dolar</option>
                <option value="2" >Euro</option>
                <option value="3" >Real (Brazil)</option>
                <option value="4">Quetzal</option>
                <option value="5">Nuevo Sol</option>
              </select>
              <br>
              <div class="text-center mt-4">
                  <button class="btn btn-indigo" type="submit">calcular</button>
              </div>
           </form>
       </div>

     <?php
       $opciones = array
         (
          //---> refiere a dolar a otros
         array(1,0.84,3.60,7.42,3.29), //dolar , euro, real , quetzal, sol
         //---> refiere a euros a otros
         array(1.18,1,4.27,8.80,3.90),//dolar , euro, real , quetzal, sol
        //-->refiere real a otros
         array(0.28,0.24,1,2.05,0.92),//dolar , euro, real , quetzal, sol
         //---> Se refiere a quetzal a otros
          array(0.134,0.114,0.49,1,0.45),//dolar , euro, real , quetzal, sol
          //---> Se refiere a nuevo sol a otros
           array(0.30,0.256,1.093,2.25,1),//dolar , euro, real , quetzal, sol
         );

         $Midivisa = array( 0 => "Dolar",
                            1 => "Euro",
                            2 => "Real",
                            3 => "Quetzal",
                            4 => "Sol"
        );
        $conv = array( 0 => "Dolar",
                           1 => "Euro",
                           2 => "Real",
                           3 => "Quetzal",
                           4 => "Sol"
       );

       $simbolo = array( 0 => "$",
                          1 => "€",
                          2 => "R$",
                          3 => "Q",
                          4 => "S"
      );

     ?>
      <?php
          $dinero = $_POST['number'];
          $divisa = $_POST['select'];
          $aConvertir = $_POST['select2'];
          $total = 0;

         ?>
          <div class="col-sm-8 text-center">
          <ul class="list-group">
            <?php
                 if($dinero == 0){
                     echo '<div class="alert alert-success alert-dismissible fade show " id="cero">
                         <button type="button" class="close">&times;</button>
                         <strong>Debe ingresar una cantidad diferente de cero</strong>
                       </div>';
                   }
             ?>
            <?php
            if(isset($_POST['number'])  && $_POST['number'] != 0)
            {

              $variable = $opciones[$divisa-1][$aConvertir-1];
              $total = $dinero * $variable;



              echo '<div class="alert alert-success alert-dismissible fade show " id="cero">
                  <button type="button" class="close">&times;</button>
                  <strong><br>Dinero: '.  $simbolo[$divisa-1]  . " " .  $dinero . " <br> Mi divisa: "   .  $Midivisa[$divisa-1]
                  . "<br> Convertir: " . $conv[$aConvertir-1]  . "<br><br> ". $simbolo[$aConvertir-1] . " "  . $total  .  '</strong>
                </div>';

            }

             ?>
            </ul>
         </div>

     </div>
   </div>




<?php

function convertir($euro)
{


  $total = $euro * 1.187902;
  return round($total , 2);
}


 ?>















<script type="text/javascript">


  $(document).ready(function(){
      $(".close").click(function(){
          $("#cero").alert("close");
      });
  });

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

<script type="text/javascript">
  $(document).ready(function(){
      $(".close").click(function(){
          $("#iguales").alert("close");
      });
  });
</script>

  </body>
</html>
