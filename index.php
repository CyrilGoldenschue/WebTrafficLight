<?php
/*if(isset($_GET['light'])){
    switch ($_GET['light']){

        case "State0":
            $Image = $_GET['light'];
            $state = "State1";
            break;
        case "State1":
            $state = "State2";
            $Image = $_GET['light'];
            break;

        case "State2":
            $state = "State3";
            $Image = $_GET['light'];
            break;

        case "State3":
            $state = "State0";
            $Image = $_GET['light'];
            break;
        default:
            $state = "State1";
            $Image = $_GET['light'];
            break;
    }
}
else{
    $state = "State1";
    $Image = "State0";
}*/

?>
<!DOCTYPE html>
<html lang="fr" style="background-color: black">
<head>
    <meta charset="UTF-8">
    <title>PRW1</title>
    <link rel="stylesheet" href="src/css/style.css"
</head>
<body>
<?php /*
<div align="center">

<img src="src/img/State<?= $state ?>.jpg"><br><br>
    <form action="/index.php" method="get">
        <button value="<?= $oldState++ ?>" type="submit" name="light">=></button>
    </form>
</div>
 */?>

<?php

require_once('src/class/TrafficLight.php');

$trafficLight = new TrafficLight();
$animationState = $trafficLight->SetState($_GET["light"]);
$trafficLight->Animation($_GET["light"]);
?>

<div id="Rectangle">

    <div class="Circle <?=$trafficLight->red?>"></div>

    <div class="Circle <?=$trafficLight->yellow?>"></div>

    <div class="Circle <?=$trafficLight->green?>"></div>

</div>
<br/>
<a class="button" href="<?=$trafficLight->SetState($_GET["light"])?>">=></a

</body>
</html>
