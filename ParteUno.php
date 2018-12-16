<?php
    //Autor:Alfreo CU.
    //Fecha: 04/06/18.
    //Haga una funcion para cada una de las operaciones con arreglos:
    
    //El maximo entre 2 arrays en ambos sentidos.
    function MaxArrays($valor1, $valor2){
        $mer = array_merge($valor1, $valor2);
        return $res = max($mer);
    }

    //El minimo entre 2 arrays en ambos sentidos.
    function MinArrays($valor1, $valor2){
        $mer = array_merge($valor1, $valor2);
        return $res = min($mer);
    }

    //La suma entre 2 arrays en ambos sentidos.
    function SumArrays($valor1, $valor2){
        $mer = array_merge($valor1, $valor2);
        return $res = array_sum($mer);
    }

    //La diferencia entre 2 arrays en ambos sentidos.
    function DifArrays($valor1, $valor2){
       $res = array_diff($valor1, $valor2);
       print_r($res);
    } 

    //Groups by
    function GroupBy(){
        $book =  array("Learn C#" => array(130,"AlfaOmega",2018), 
        "El arte de amarte de nappa" =>array (200,"NiñoGuero",2017));
        echo $book["Learn C#"][1];
    }

    //Sort por un parametro.
    function SortUnO($valor1){ //Insertion Sort.
        $j = 0;
        for($i = 1; $i < count($valor1); $i++ ){
            $j = $i;
            while($j > 0 && $valor1[$j-1] > $valor1[$j]){
                $temp = $valor1[$j];
                $valor1[$j] = $valor1[$j-1];
                $valor1[$j-1] = $temp;
                $j = $j-1;
            }
        }
        for($i = 0; $i < count($valor1); $i++)
            echo $valor1[$i]." ";
    }

    //Sort por n paramatros.
    function SortN($valor2, $izq, $der){
        $i = $izq;
        $j = $der;
        $x = $valor2[($izq + $der)/2];
        do{
            while(($valor2[$i] < $x) && ($j <= $der)){
                $i++;
            }
            while(($x < $valor2[$j]) && ($j > $izq)){
                $j--;
            }
            if($i <= $j){
                $aux = $valor2[$i]; $valor2[$i] = $valor2[$j]; $valor2[$j] = $aux;
                $i++;  $j--;
            }
        }while($i <= $j);
        if($izq < $j ){
            SortN($valor2, $izq, $j);
        }
        if($i < $der){
            SortN($valor2, $i, $der);
        }
        return $valor2;
    }

    //Muestra el SortN.
     function MostrarQuickSort($valor2){
        $vector=SortN($valor2,0,sizeof($valor2)-1);
        for($i=0;$i<sizeof($vector);$i++)
            echo $vector[$i]." ";
    }

    //Todos los pares.
    function NumerosPares($valor1, $valor2){
        $mer = array_merge($valor1, $valor2);
        for($i = 0; $i < count($mer); $i++){
            if(($mer[$i] % 2) == 0)
                echo $mer[$i]." ";
        }
    }

    //Todos los impares.
    function NumerosImpares($valor1, $valor2){
        $mer = array_merge($valor1, $valor2);
        for($i = 0; $i < count($mer); $i++){
            if(($mer[$i] % 2) != 0)
                echo $mer[$i]." ";
        }
    }

    //Valores duplicados entre 2 arrays.
    function ValoresDuplicados($valor1, $valor2){
        $mer = array_merge($valor1, $valor2);
        $res = array_unique($mer);
        print_r($res);
    }

    //La multiplicaciín de todos los elementos dento de un array.
    function MultArrays($valor2){
        $res = 1;
        for($i = 0; $i < count($valor2); $i++){
            $res *= $valor2[$i];
        }
        return $res;
    }

    //Devolver todos los elementos de un array elevados a una potencia n por paso por valor (funcion1(param))
    function PotenciaArraysVal($valor1, $potencia = 2){
        for($i = 0; $i < count($valor1); $i++){
            echo pow($valor1[$i], $potencia)." ";
        }
    }

    //Devolver todos los elementos de un array elevados a un potencia n por paso por referencia (funcion1(&param1))
    function PotenciaArraysRef(&$valor2, &$potencia = 2){
        for($i = 0; $i < count($valor2); $i++){
            echo pow($valor2[$i], $potencia)." ";
        }
    }
    
    function main(){
    //Entrada de valores.
    $nValor1 = array(5,7,3,0,8);
    $nValor2 = array(11,5,3,2,1);
    echo "Número mayor: ".MaxArrays($nValor1, $nValor2)."</br>";
    echo "Número menor: ".MinArrays($nValor1, $nValor2)."</br>";
    echo "La suma es: ".SumArrays($nValor1, $nValor2);
    echo "<br>Diferencia entre dos arreglos: ";
    DifArrays($nValor1, $nValor2);
    echo "<br>Números pares: ";
    NumerosPares($nValor1, $nValor2);
    echo "<br>Números impares: ";
    NumerosImpares($nValor1, $nValor2);
    echo "<br>Paso por valor: ";
    PotenciaArraysVal($nValor1);
    echo "<br>Paso por Referencia: ";
    PotenciaArraysVal($nValor2);
    echo "<br>La multiplicación de todos los elementos es: ".MultArrays($nValor2);
    echo "<br>Insertion Sort: ";
    SortUnO($nValor1);
    echo "<br>QuickSort: ";
    MostrarQuickSort($nValor2);
    echo "<br>Valores Duplicados Eliminados: ";
    ValoresDuplicados($nValor1, $nValor2);
    echo "<br>".GroupBy();
    }
    main();
?>