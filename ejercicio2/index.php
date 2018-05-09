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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </head>
  <body>
    <?php
        error_reporting(0);
          $nombre =  $_POST['name'];
          $hora = $_POST['time'];
          $select = $_POST['select'];
          $saludo = "";

          if($hora > 00.00 && $hora < 05.00)
          {
            $saludo = "Feliz madrugada";
            $select = "am";
          }
          if($hora > 05.00 && $hora < 12.00)
          {
            $saludo = "Buenos días";
            $select = "am";
          }
          if($hora == 12.00)
          {
            $saludo = "Feliz medio día";
            $select = "md";
          }
          if($hora > 12.00 && $hora < 18.00)
          {
            $saludo = "Buenas tardes";
            $select = "pm";
          }
          if($hora >= 18.00 && $hora <23.59)
          {
            $saludo = "Feliz noche";
            $select = "pm";
          }
          if($hora == 24.00)
          {
            $saludo = "Feliz media noche";
            $select = "am";
          }
        ?>

    <div class="container text-center">
      <div class="row">
        <div class="col-sm-6">
          <br>
              <h1>Bienvenidos</h1>
              <!-- Default form login -->
              <form method="post" oninput="x.value=parseInt(a.value)+parseInt(b.value)">
                  <label  >Ingrese el nombre</label>
                  <input type="text" name="name" required class="form-control">
                  <br>
                    <label  >Ingrese la hora tipo: 24 horas</label>
                    <br>
                   <input class="form-control" name="time" type="time">
                    <br>
                  <div class="text-center mt-4">
                      <button class="btn btn-indigo" type="submit">Enviar</button>
                  </div>
              </form>

              <br>
              <br>

        </div>
        <div class="col-sm-6">
          <!-- Card -->
          <br>
           <div class="card">
             <img class="card-img-top" src="http://static.t13.cl/images/sizes/1200x675/1488898706-istock000003106532large.jpg" alt="Card image cap">
             <div class="card-body">
               <h5 class="card-title"><a><?php echo $saludo ?></a></h5>
               <h5 class="card-title"><a><?php echo $nombre ?></a></h5>
               <p class="card-text"><?php echo $hora . " " . $select ?></p>
             </div>
           </div>
           <!-- Card -->
        </div>
      </div>
    </div>
  </body>
</html>
