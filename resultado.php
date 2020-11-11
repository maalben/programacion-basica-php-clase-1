<?php 

$numero1 = $_POST["txtnumero1"];
$numero2 = $_POST["txtnumero2"];

//Operadores aritméticos
$suma = $numero1 + $numero2;
$resta = $numero1 - $numero2;
$multiplicacion = $numero1 * $numero2;
$division = $numero1 / $numero2;

echo "La suma de los valores es : " . $suma;
echo "<br>La suma de los valores es : " . $resta;
echo "<br>La suma de los valores es : " . $multiplicacion;
echo "<br>La suma de los valores es : " . $division;

//Comentario por renglón
/**
 *
 *  
 * Comentarios de varias líneas
 * 
 */


 //Operadores lógicos
/**
 * 
 * Y = &&
 * O = || pipe 
 * 
 */

 if($numero1 > $numero2){
    echo "<br><br><br> El mayor es el número 1, con el valor: " . $numero1;
 }else{
    echo "<br><br><br> El mayor es el número 2, con el valor: " . $numero2;
 }

 if($numero1 > 10 && $numero1 > $numero2){
    echo "<br><br><br> El mayor es el número 1, con el valor: " . $numero1;
 }else{
    echo "<br><br><br> El mayor es el número 2, con el valor: " . $numero2;
 }



 /**
  * Operadores relacionales
  * 
  *   > mayor que
  *   < menor que
  *   >= mayor o igual que
  *   <= menor o igual que
  *   = Asignación
  *   ==  igual de comparación (if)
  *   !  negación
  *   !=  diferente o distinto
  */

    if($numero1 != $numero2){
        echo "<br><br> Los valores son diferentes";
    }else{
        echo "<br><br> Los valores son iguales";
    }

    if(!($numero1 > 0)){
        echo "<br><br> El valor es mayor a cero";
    }else{
        echo "<br><br> El valor no es mayor";
    }


    /**
     * 
     * Operador switch (Según)
     * 
     * teniendo en cuenta los colores del semáforo,
     * realiza un algoritmo donde se indique que:
     * Verde: Debe decir Avanzar
     * Amarillo: Debe de Detenerse
     * Rojo: Debe decir NO Avanzar
     * 
     */

     echo "<br><br><br>";

    $colorSemaforo = "AmArilLo";
    
    switch(strtolower($colorSemaforo)){

        case "amarillo":
            echo "Semáforo es " . strtoupper($colorSemaforo) . ": DETENERSE";
        break;

        case "rojo":
            echo "Semáforo es " . $colorSemaforo . ": NO AVANZAR";
        break;

        case "verde":
            echo "Semáforo es " . $colorSemaforo . ": AVANZAR";
        break;

        default:
            echo "El semáforo lo dañaron...";
    break;

    }


    /**
     * 
     * CICLOS
     * 
     * for - while - do while ..... foreach
     * 
     */

/**
 * 
 * for - tablas de multiplicar
 * 
 * Crear la tabla de multiplicar de un valor X (numero1) hasta el 10
 * 
 * 5 x 1 = 5
 * 5 x 2 = 10
 * ..
 * .
 * .
 * 
 * 
 */

 for($i=1; $i<=10; $i++){
    echo $numero1 . " x " . $i . " = " . ($numero1 * $i) . "<br>";
 }

 echo "<br><br>";
 /**
  * While
  * 
  */

  $i=1;
 while($i<=10){
    echo $numero1 . " x " . $i . " = " . ($numero1 * $i) . "<br>";
    $i++;
 }
 echo "<br><br>";
/**
 * 
 * Do while
 * 
 */
$i=1;
do{
   echo $numero1 . " x " . $i . " = " . ($numero1 * $i) . "<br>";
   $i++;
}while($i<=10);

/***
 * 
 * foreach
 * 
 */

 /**
  * 
  * Creación de un vector
  *
  */

echo "<br><br>";

    $vector = array(1,2,3,4,5,6,7, "Algo", "Textp");
    $longitud = count($vector);
    echo "La cantidad de elementos del vector es " . $longitud;
    

    echo "<br><br>";

    $limite = array(1,2,3,4,5,6,7,8,9,10,11,12,13,20,121,45,32);

    foreach($limite as $valor){
        echo $numero1 . " x " . $valor . " = " . ($numero1 * $valor) . "<br>";
    }

?>