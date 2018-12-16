<?php
/*
Haga una funcion que me permita voltear una lista de (ancla ->->-
>-> a <-<-<-<-(ancla) (invertir la lista)

Imprimir todo en pantalla, pero dar posibilidad de seleccionar
imprecion por creacion propia (crear su propia funcion para
imprimir en pantalla)

Crear metodos de lista doblemente ligada que muestren segun
inputs de un textbox (input a digamos que es prev) tiene que
recorrer el array un elemento a la izquierda, input
ejemplo:
(a, d,d,d,d,a,d,n,d,a,a,a,n) donde a es prev, d es next, n print
de la posicion en el array para esto, todos los arrays que
ocupen solo valores numericos deberan de autogenerarse
todos los valores

Crear metodo para que apartir de un array con posibles nombres de
metodos que se ralacionan con el valor que recibiran, recibir un
prefijo para autocrear esa variable de acceso que al usarla te dara
el valor esperado ejemplo:
$var_array = array(“count” => //obtener la cantidad
de elementos dentro de algo,
//otras instrucciones);
si se introduce el prefijo “maestros” se podra usar
$maestros_count (la cual automaticamente tiene
guardada la cantidad de maestros que existen)

***Una funcion para convinar los elementos dentro de un array, solo
los que se repiten, solo los que no se repiten y convinar todo.***
*/

//Imprimir exactamente todos los elementos que componen a un array.
$array = array(1,5,7,8,5,4,8,5,9,5,0,5,10,15,85,7,5,2);
$rag = range(1, 20); //arreglo que contiene un rango de elementos.
print_r($array);

//Crear una funcion para definir un tamaño de un array (ni menor, ni mayor).
function TamArray($array1){
    return sizeof($array1);
    //return count($array1);
}

//una funcion tipo randomsort (realmente para revolver) el array.
function randomSort($rag1){
    shuffle($rag1); //Mezcla un array
    foreach($rag1 as $num){
        echo "$num ";
    }
}

//Entrada de datos.
echo "<br>Tamaño del arreglo: ".TamArray($array)."</br>";
echo "RandomSort: ";
randomSort($rag);
?>