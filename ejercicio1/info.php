<?php
//se declara una función que necesitara 3 parametros para poder funcionar
//parámetro: es una variable utilizada para recibir valores de entrada en
//una rutina, subrutina o método. Dichos valores, que serán enviados desde
//la rutina invocante, son llamados argumentos.

 function operacion($n1,$n2,$tipo){
   //dentro de la funcion se declara una variable $result = 0;
   //la razón de esta variable es para poder controlar el flujo de lo que es
   //la estructura de control switch que recibe un parametro para poder funcionar.
   //su uso basicamente es optener una opción y respuesta basandose en lo que tenga como
   //valor la variable que lo controla. Por ejemplo: Tenemos que: $tipo = 2
   //switch debera devolvernos y realizar todo lo que tenga que ver con el caso 2
     $resul=0;
     switch ($tipo){
       //caso 1: realiza la suma
         case 1:
             $resul = ($n1+$n2);
             break;
              //caso 2: realiza la resta
         case 2:
             $resul = ($n1-$n2);
             break;
              //caso 3: realiza la multiplicación
         case 3:
             $resul = ($n1*$n2);
             break;
              //caso 4: realiza la división
         case 4:
         //en este caso debemos validar si el numero 2 ingresado no sea cero, ya que por
         //regla matematica división dentre cero es indefinido y no podemos generar
         //este tipo de errores.
             if($n2 == 0){
                 $resul = "NO valido";
             }else{
                $resul = ($n1/$n2);
             }
             break;
             //El caso default se va dar cuando la variable que controla el switch no encuentre
             //un caso con su valor. Asi que devolvera el caso default
             //en esta ocación si llegase a seleccionar 5 cosa que no se podra dar ya que
             //el dropdown en html tiene solo 4 opciones con sus respectivos value desde el 1 hasta el 4

         default :
             $resul = "Operacion Invalidad";
             break;
     }
     //imprimimos la variable $resul que tiene el resultado de la operación que seleccionamos
     return $resul;
}
?>
