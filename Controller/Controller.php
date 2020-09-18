<?php

require "Model/Model.php";
//require "View/css/style.css";

function NextState(){

    $_SESSION['OldLight'] = $_SESSION['NewLight'];
    IncludeView();
}

function PauseState(){

    $_SESSION['NewLight'] = 4;
    $_SESSION['OldLight'] = $_SESSION['NewLight'];
    IncludeView();
    $_SESSION['NewLight'] = 0;
}

function RestartState(){

    $_SESSION['Action'] = "Next";
    IncludeView();
}


function IncludeView(){
    $trafficLight = new TrafficLight();
    $_SESSION['NewLight'] = $trafficLight->SetState($_SESSION['NewLight']);
    include "View/View_TrafficLight.php";
}



