<!DOCTYPE html>
<!--FRANCISCO JOSÉ NAVAS HERNÁNDEZ-->
<!--GRUPO PHP-01-->
<?php   require_once('info.php'); ?>
<html>
    <head>
        <meta charset="UTF-8">
        <!--titulo de la pagina-->
        <title>Seleccion de operacion</title>
    </head>
    <body>
      <?php
      error_reporting(0);

        ?>
      <!--formulario html donde recolectaremos los datos-->
        <form name="operaciones" action="index.php">
          <!--Para hacer el formulario mas organizado creamos una tabla y en ella
          ubicamos los elementos del formulario-->
            <table>
              <!--la etiqueta tr hace referencia a una fila-->
                <tr>
                  <!--La etiqueta td hace referencia a una columna-->
                    <td>Digite el primer número </td>
                    <!--Dentro de un td tenemos un input donde capturamos el numero 1-->
                    <td><input type="text" value="<?php echo $_REQUEST["n1"]?>" name="n1" id="n1"></td>
                </tr>
                <tr>
                    <td>Digite el segundo número</td>
                    <!--Dentro de un td tenemos un input donde capturamos el numero 2-->
                    <td><input type="text" value="<?php echo $_REQUEST["n2"]?>"  name="n2" id="n2"></td>
                </tr>
                <tr>
                    <td>Seleccione operacion: </td>
                    <!--dentro de este td tendremos una etiqueta <select>-->
                    <td>
                      <!--<select> representa un control que muestra un menú de opciones.
                       podriamos llamarlo dropdown ya que nos da opciones para poder seleccionar
                     en este caso seleccionamos entre suma, resta, multiplicacion y division,
                      tambien se le da un nombre para poder capturar luego en php el valor que tomara-->
                        <select name="ope" >
                          <!-- dentro de <select> debe llevar una etiqueta llamada <option> que hara la
                          funcion de brindarnos las diferentes opciones en el dropdown en este caso
                          seria suma, resta, division, multiplicacion.-->
                            <option value="1">Suma</option>
                            <option value="2">Resta</option>
                            <option value="3">Multiplicacion</option>
                            <option value="4">Division</option>
                            <!--Tambien tiene un atributo value que servira para poder capturar que opcion hemos tomado
                            si selecciona suma el value sera = 1 con esto iniciamos la logica de poder programar
                            el formulario-->
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                      <!--Simplemente tenemos un boton para poder enviar los datos-->
                        <input type="submit" value="Ver respuesta" name="p">
                    </td>
                </tr>
                <tr>
                  <!-- Aqui dentro de una etiqueta td se va imprimir los resultados-->
                    <td colspan="2">
                      <!--Iniciamos con codigo php-->
                        <?php
                        //Vamos a verificar con el metodo isset() si los idenfificadores "p", "n1", "ope" existen,
                        //ya que isset() devuelve un valor true o false no es necesario igualarlo a algo.
                        //en este caso si no se iguala a nada querra decir que si el valor de isset() es true entonces
                        //vamos a entrar en el if
                        if(isset($_REQUEST["p"]) && isset($_REQUEST["n1"]) && isset($_REQUEST["n2"]) && isset($_REQUEST["ope"]))
                        {
                          //impresion de los datos--
                          //se utiliza la función operaciones(a,b,c) que necesita para poder funcionar de 3 parametros
                          //que en este caso estan siendo rellenados por: $_REQUEST["n1"], $_REQUEST["n2"], $_REQUEST["ope"]
                          //todo eso se imprime dentro de una etiqueta h1

                          //esta linea de codigo no es correcta ya que la funcion operacion no retorna nada
                          //por no se imprimira nada. lo que deberiamos hacer es simplemente llamarla asi:
                          // operacion($_REQUEST["n1"], $_REQUEST["n2"], $_REQUEST["ope"]);

                          $variable =  operacion($_REQUEST["n1"], $_REQUEST["n2"], $_REQUEST["ope"]);
                          echo $variable;
                        }
                        ?>
                          <!--fin con codigo php-->
                    </td>
                </tr>
            </table>
        </form>
          <!--fin formulario html donde recolectaremos los datos-->

          <!--Inicio de codigo php-->

        <!--fin de codigo php-->
    </body>
</html>
