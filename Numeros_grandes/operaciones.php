<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Programa Operaciones con Números grandes</title>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,900" rel="stylesheet">
</head>
<body>
  <div class="row main-container middle-xs center-xs">
    <div class="col-md-8 col-sm-10 col-xs-100">
      <div class="animated fadeInUp">
        <div class="menu body">
          <header class="text-center">
            <h1 class="red-text hide-siliguri title threeD">Programa Operaciones con Números grandes</h1>
            <h2 class="title2 blue-text">Operaciones aritmeticas</h2>
            <div class="card"><br>
              <h3 class="red-text">Ingresando datos:</h3>
              <form action="operaciones.php" method="post" name="frm">
                <b>Ingrese el primer número:</b>
                <input type="text" name="num1"/>
                <br></br><b>Ingrese el segundo número:</b>
                <input type="text" name="num2"/>
                <p><b>Envie los datos por favor.</b></p>
                <input type="submit" name="Enviar"/>
              <br></br>
              </form>
            </div>
            <?php
                function suma($num1, $num2){
                    return bcadd($num1,$num2);
                }

                function resta($num1, $num2){
                    return bcsub($num1, $num2);
                }

                function mult($num1, $num2){
                    return bcmul($num1, $num2);
                }

                function div($num1, $num2){
                    return bcdiv($num1, $num2);
                }

                function potencia($num1, $num2){
                    if($num2 == 0){
                        return 1;
                    }
                    else if($num2 < 0){
                        return potencia($num1, $num2 + 1) / $num1;
                    }
                    else{
                        return bcpow($num1, $num2);
                    }
                }

                function raiz($num1, $num2){
                    return bcsqrt($num1, $num2);
                }
                
                function cantidadDigitos($num) {
                    echo "<b>El total de dígitos son:</b> ".strlen($num). "</br>";
                }

                function main() {
                    $valor1 = $_POST['num1']; 
                    $valor2 = $_POST['num2'];
                    echo "<br><div class='card'></br>";
                    echo "<h3 class='green-text'>Datos ingresados:</h3>";
                    echo "<b>El primer número:</b> ".$valor1."</br>";
                    cantidadDigitos($valor1);
                    echo "<b>El segundo número:</b> ".$valor2."</br>";
                    cantidadDigitos($valor2);
                    echo "</br></div>";

                    echo "<br><div class='card'></br>";
                    echo "<h3 class='green-text'>Suma:</h3>";
                    echo "<b>Primer número:</b> ".$valor1."</br>";
                    echo "<b>Segundo número:</b> ".$valor2."</br>";
                    echo "<b>El resultado es:</b> ".suma($valor1, $valor2)."</br>";
                    echo "</br></div>";

                    echo "<br><div class='card'></br>";
                    echo "<h3 class='green-text'>Resta:</h3>";
                    echo "<b>Primer número:</b> ".$valor1."</br>";
                    echo "<b>Segundo número:</b> ".$valor2."</br>";
                    echo "<b>El resultado es:</b> ".resta($valor1, $valor2)."</br>";
                    echo "</br></div>";
                    
                    echo "<br><div class='card'></br>";
                    echo "<h3 class='green-text'>Multiplicación:</h3>";
                    echo "<b>Primer número:</b> ".$valor1."</br>";
                    echo "<b>Segundo número:</b> ".$valor2."</br>";
                    echo "<b>El resultado es:</b> ".mult($valor1, $valor2)."</br>";
                    echo "</br></div>";

                    echo "<br><div class='card'></br>";
                    echo "<h3 class='green-text'>División:</h3>";
                    echo "<b>Primer número:</b> ".$valor1."</br>";
                    echo "<b>Segundo número:</b> ".$valor2."</br>";
                    echo "<b>El resultado es:</b> ".div($valor1, $valor2)."</br>";
                    echo "</br></div>";

                    echo "<br><div class='card'></br>";
                    echo "<h3 class='green-text'>Potencia:</h3>";
                    echo "<b>Primer número:</b> ".$valor1."</br>";
                    echo "<b>Segundo número:</b> 2 </br>";
                    echo "<b>El resultado es:</b> ".potencia($valor1,"2")."</br>";
                    echo "</br></div>";

                    echo "<br><div class='card'></br>";
                    echo "<h3 class='green-text'>Raíz:</h3>";
                    echo "<b>Primer número:</b> ".$valor1."</br>";
                    echo "<b>Segundo número:</b> 2 </br>";
                    echo "<b>El resultado es:</b> ".raiz($valor1, 2)."</br>";
                    echo "</br></div>";
                }
                main();
            ?>
          </header>
        </div>
      </div>
    </div>
  </div>
</body>
</html>