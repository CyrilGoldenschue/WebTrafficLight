<?php
session_start();
require_once('src/class/TrafficLight.php');

if(isset($_GET['Pause'])){
    $_SESSION['NewLight'] = 4;
    $_SESSION['OldLight'] = $_SESSION['NewLight'];
}elseif (isset($_GET['Restart'])){
    $_SESSION['NewLight'] = 0;
}

//$_SESSION['OldLight'] = $_GET['light'];
$trafficLight = new TrafficLight();
$_SESSION['NewLight'] = $trafficLight->SetState($_SESSION['NewLight']);


?>
<!DOCTYPE html>
<html lang="fr" style="background-color: black">
<head>
    <meta charset="UTF-8">
    <title>PRW1</title>
    <link rel="stylesheet" href="src/css/style.css"
</head>
<body>
    <div id="Rectangle">

        <div class="Circle <?= ($trafficLight->GetRedCircle() ? "RedCircle" : "ExtinctCircle" )?>"></div>

        <div class="Circle <?=($trafficLight->GetYellowCircle() ? "OrangeCircle" : "ExtinctCircle" )?>"></div>

        <div class="Circle <?=($trafficLight->GetGreenCircle() ? "GreenCircle" : "ExtinctCircle" )?>"></div>

    </div>
    <div id="Square">

        <div  class="Circle OrangeCircle <?= ($trafficLight->GetBlinkCircle() ? "BlinkingCircle" : "ExtinctCircle" )  ?>"></div>

    </div>
    <br/>
    <div id="Button">
        <a class="button <?= (isset($_GET['Pause']) ? "disabled" : "" )?>" href="?Next">=></a<br>
        <a class="button" href="<?= ($_SESSION['NewLight'] == 4 ? "?Restart" : "?Pause" )?>">||</a
    </div>
</body>
</html>
<?php

?>
