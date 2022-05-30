<?php 

// * Para declarar una variable en PHP usamos el signo
// de moneda, luego el nombre de la variable
// El compilador de php se encarga de hacer la tipacion 

// Datos Adicionales:
// gettype -> Es un metodo que devuelve el tipo de variable

// is_int -> Comprueba si el tipo de variable es un entero

// is_string -> Comprueba si el tipo de variable es una cadena

 $un_bool = TRUE;
 $un_str = "foo";
 $un_str2 = 'foo';
 $un_int = 12;

 echo gettype($un_bool);
 echo gettype($un_str);

 if(is_int($un_int)){
    $un_int += 4;
 }


 if (is_string($un_bool)) {
	     echo "Cadena: $un_bool";
 }
?>
