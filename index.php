<?php
$state = "state0";
$Image = "Etat1.jpg";
switch ($_GET['fire']){

    case "state0": $state = "state1";
        $Image = "Etat1.jpg";
        break;
    case "state1": $state = "state2";
        $Image = "Etat2.jpg";
        break;

    case "state2": $state = "state3";
        $Image = "Etat3.jpg";
        break;

    case "state3": $state = "state0";
        $Image = "Etat4.jpg";
        break;
    default: $state = "state1";
        $Image = "Etat1.jpg";
        break;
}
?>
<html style="background-color: black">
<body>
<div align="center">

<img src="/img/<?php echo $Image ?>"><br><br>
    <form action="/index.php" method="get">
        <button value="<?php echo $state ?>" type="submit" name="fire" id="fire">=></button>
    </form>
</div>
</body>
</html>