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
              <p class="h4 text-center mb-4">CONVERSOR DE EURO A DOLAR Y DOLAR A EURO</p>
              <br>

              <label  class="grey-text">Cantidad a convertir</label>
              <input required type="number"  step="any" value="<?php echo $_POST['number']; ?>" name="number" class="form-control">
              <br>

              <label  class="grey-text">Divisa</label>
              <select name="select" class="form-control">
                <option value="dolar">Dolar</option>
                <option value="euro" >Euro</option>
                <option value="real" >Real (Brazil)</option>
                <option value="quetzal">Quetzal</option>
                <option value="nuevoSol">Nuevo Sol</option>
              </select>
              <br>

              <label  class="grey-text">Pasar a</label>
              <select name="select2" class="form-control">
                <option value="dolar">Dolar</option>
                <option value="euro" >Euro</option>
                <option value="real" >Real (Brazil)</option>
                <option value="quetzal">Quetzal</option>
                <option value="nuevoSol">Nuevo Sol</option>
              </select>
              <br>

              <div class="text-center mt-4">
                  <button class="btn btn-indigo" type="submit">calcular</button>
              </div>
           </form>
       </div>

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

               if($divisa != $aConvertir)
               {
                 switch ($aConvertir) {
                   case 'dolar':
                        $total = euro_dolar($dinero);
                         echo '<div class="alert  alert-secondary alert-dismissible fade show " id="myAlert2">
                             <button type="button" class="close">&times;</button>
                             <strong> ' . '<h1> son : $ ' . $total . '</h1> </strong>
                              </div>';
                     break;

                   case 'euro':
                      $total =  dolar_euro($dinero);
                         echo '<div class="alert  alert-secondary alert-dismissible fade show " id="myAlert2">
                             <button type="button" class="close">&times;</button>
                             <strong> ' . '<h1> son €: ' . $total . '</h1> </strong>
                              </div>';
                     break;

                   default:
                     echo "error";
                     break;
                 }
               }
               else {

                 if($divisa == $aConvertir)
                 {
                   echo '<div class="alert alert-success alert-dismissible fade show " id="iguales">
                       <button type="button" class="close">&times;</button>
                       <strong>Divisas iguales debe ingresar diferentes divisas</strong>
                     </div>';
                 }
               }
              }


             ?>
            </ul>
         </div>

     </div>
   </div>




<?php

function euro_dolar($euro)
{


  $total = $euro * 1.187902;
  return round($total , 2);
}
function dolar_euro($dolar)
{


  $total = $dolar * 0.9233;
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
