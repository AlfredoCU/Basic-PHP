<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>API DE GOOGLE</title>
</head>
<body>
    <h1>API de Google :)</h1>
    <form class="" action="" method="get">
    <label for="Dirección"></label>
    <input type="text" name="direccion" value="">
    <button type="submit" name="button"> Enviar </button>
    </form>
</body>
</html>

<?php
    if(isset($_GET['direccion'])){
        $direccion = $_GET['direccion'];
        //echo "La dirección es: ".$direccion."</br>";
        $url = "https://maps.googleapis.com/maps/api/geocode/json?address=".$direccion."&key=AIzaSyAMj-CmQrRdsXV5ydzyTiYFirqRnujnRCM";
        //echo "$url";
        //echo "</br>";
        $json = file_get_contents($url);
        $datos = json_decode($json,true);
        //var_dump($datos);
        $lat = $datos["results"][0]["geometry"]["location"]["lat"];
        $lng = $datos["results"][0]["geometry"]["location"]["lng"];
        echo "</br>";
        echo "La longitud es: ".$lng;
        echo "<br>La latitud es: ".$lat;
    }
?>