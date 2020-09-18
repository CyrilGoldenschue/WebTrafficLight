<?php ?>
<!DOCTYPE html>
<html lang="fr" style="background-color: black">
<head>
    <meta charset="UTF-8">
    <title>PRW1</title>
    <link rel="stylesheet" href="../Public/css/style.css">
</head>
<body>
<!--<a class="button " href="?Crossroads">Crossroads</a>-->

    <div>
        <div id="Rectangle" data-light="<?= $_SESSION['OldLight'] ?>">

            <div class="Circle <?= ($trafficLight->GetRedCircle() ? "RedCircle" : "ExtinctCircle" )?>"></div>

            <div class="Circle <?=($trafficLight->GetYellowCircle() ? "OrangeCircle" : "ExtinctCircle" )?> <?= ($trafficLight->GetBlinkCircle() ? "BlinkingCircle" : "" )  ?>"></div>

            <div class="Circle <?=($trafficLight->GetGreenCircle() ? "GreenCircle" : "ExtinctCircle" )?>"></div>

        </div>
    </div>
    <div id="Button">
        <!--<a class="button <?= (isset($_GET['Pause']) ? "disabled" : "" )?>" href="<?= $_SESSION['Action']="Next" ?>">=></a>-->
        <a class="button" href="<?= isset($_GET['Pause']) ? $_SESSION['Action']="Next"  : "?Pause" ?>">||</a>
    </div>
<script src="../Public/js/Timer.js" ></script>
</body>
</html>
<?php

?>
