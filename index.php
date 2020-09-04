<?php
require_once('src/class/TrafficLight.php');

$trafficLight = new TrafficLight();
$animationState = $trafficLight->SetState($_GET["light"]);


?>
<!DOCTYPE html>
<html lang="fr" style="background-color: black">
<head>
    <meta charset="UTF-8">
    <title>PRW1</title>
    <link rel="stylesheet" href="src/css/style.css"
</head>
<body>
<div>
    <div id="Rectangle">

        <div class="Circle <?= ($trafficLight->red ? "RedCircle" : "ExtinctCircle" )?>"></div>

        <div class="Circle <?=($trafficLight->yellow ? "OrangeCircle" : "ExtinctCircle" )?>"></div>

        <div class="Circle <?=($trafficLight->green ? "GreenCircle" : "ExtinctCircle" )?>"></div>

    </div>
</div>
<br/>
<a class="button" href="<?=$trafficLight->SetState($_GET["light"])?>">=></a

</body>
</html>
