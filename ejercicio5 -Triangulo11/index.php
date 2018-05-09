<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Triangulo</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="bootstrap/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
   <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">-->
    <!-- Material Design Bootstrap -->
    <link href="MDB-Free/css/mdb.min.css" rel="stylesheet">
    <script src="MDB-Free/js/jquery-3.2.1.min.js"></script>
    <script src="MDB-Free/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </head>
  <body class="">

    <style media="screen">
    .fade {
      opacity: 0;
      transition: opacity .15s linear;
      transition-property: opacity;
      transition-duration: 0.75s;
      transition-timing-function: linear;
      transition-delay: initial;
    }
    .mas
    {
      font-size: 30px;
    }
    .pro
    {
      display: inline-block;
    }
    .carta
    {
      padding-bottom: 15px;
      padding-left: 15px;
      padding-top: 15px;
      padding-right: 15px;
      border-bottom: solid #C5C9CA 2px;
      border-top: solid #C5C9CA 2px;
     border-left: solid #C5C9CA 2px;
      border-right: solid #C5C9CA 2px;
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
           <form method="post" class="" name="for">
             <div class="carta">
               <p class="h4 text-center mb-4">Triangulo</p>
               <br>
               <label  class="grey-text">Ingrese el tamaño del triangulo</label>
               <input required type="number" value="<?php echo $_POST['number']; ?>" name="number" class="form-control">
               <br>
               <label  class="grey-text">Selecciona imagen</label>
               <select  name="figura" class="form-control">
                 <option selected="selected" value="hoja">hoja  </option>
                 <option value="carrot">Zanahoria</option>
                 <option value="sun">sol</option>
                 <option value="regadera">regadera</option>
                 <option value="house">casa</option>
                 <option value="cubeta">cubeta</option>
                 <option value="otro">Otro</option>
               </select>
               <br>

             </div>
                <br>
             <div class="carta">
               <label  class="grey-text">Si no selecciona figura seleccione caracter </label>
               <select name="caracter" class="form-control">
                 <option selected="selected"  value="Nada">sin caracter</option>
                 <option value="*">* </option>
                 <option value="+">+</option>
               </select>
               <br>
               <label  class="grey-text">Seleccione un color </label>
              <input type="color" name="color" id="myColor">
              <p id="demo"></p>
              <label  class="grey-text">Tamaño </label>
              <input required type="number" value="40"  name="tamaño" class="form-control">
             </div>
             <br>

              <div class="text-center mt-4">
                  <button class="btn btn-indigo" type="submit">Crear triangulo</button>
              </div>
           </form>
       </div>

        <?php
          $cantidad = $_POST['number'];
          $figura = $_POST['figura'];
          $caracter = $_POST['caracter'];
          $color = $_POST['color'];
          $tamaño = $_POST['tamaño'];
         ?>
          <div class="col-sm-8 text-center carta">
          <ul class="list-group mas pro">
                <?php
                for ($i=0; $i <=$cantidad ; $i++) {
                     for ($y=0; $y<$i ; $y++) {
                      // echo " " .  $figura . " ";
                      if($figura != "otro")
                      {
                        echo '<img class="" src="' . $figura . '.png" height="50" width="50" alt="">';
                      }
                      else {
                        echo  '<div style="color:'. $color. '; font-size:' .$tamaño .'px;"   class="pro">'  . $caracter  .    '</div>';
                      }

                     }
                     echo " <br> ";
                }
               ?>
            </ul>
         </div>
     </div>
   </div>

<div class="pro">

</div>
   <script>
   function myFunction() {
       var x = document.getElementById("myColor").value;
       document.getElementById("demo").innerHTML = x;
   }
   </script>


<script type="text/javascript">
  $(document).ready(function(){
      $(".close").click(function(){
          $("#myAlert").alert("close");
      });
  });
</script>



  </body>
</html>
