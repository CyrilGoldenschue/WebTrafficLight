<?php

if(isset($_GET['Pause'])){
    $_SESSION['NewLight'] = 4;
    $_SESSION['OldLight'] = $_SESSION['NewLight'];
}elseif (isset($_GET['Restart'])){
    $_SESSION['NewLight'] = 0;
}

$trafficLight = new TrafficLight();
$_SESSION['NewLight'] = $trafficLight->SetState($_SESSION['NewLight']);


?>
<!DOCTYPE html>
<html lang="fr" style="background-color: black">
<head>
    <meta charset="UTF-8">
    <title>PRW1</title>
    <link rel="stylesheet" href="../Public/css/style.css">
</head>
<body>
<a class="button " href="?Crossroads">Crossroads</a>

    <div>
        <div id="Rectangle">

            <div class="Circle <?= ($trafficLight->GetRedCircle() ? "RedCircle" : "ExtinctCircle" )?>"></div>

            <div class="Circle <?=($trafficLight->GetYellowCircle() ? "OrangeCircle" : "ExtinctCircle" )?> <?= ($trafficLight->GetBlinkCircle() ? "BlinkingCircle" : "" )  ?>"></div>

            <div class="Circle <?=($trafficLight->GetGreenCircle() ? "GreenCircle" : "ExtinctCircle" )?>"></div>

        </div>
    </div>
    <div id="Button">
        <a class="button <?= (isset($_GET['Pause']) ? "disabled" : "" )?>" href="?Next">=></a>
        <a class="button <?= (isset($_GET['Pause']) ? "" : ($trafficLight->GetPauseState() ? "" : "disabled" ) )?>" href="<?= ($_SESSION['NewLight'] == 4 ? "?Restart" : "?Pause" )?>">||</a>

    </div>
</body>
</html>

