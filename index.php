<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_GET['Pause'])) {
    $_SESSION['Action'] = "Pause";
} elseif (isset($_GET['Restart'])) {
    $_SESSION['Action'] = "Next";
}

require "Controller/Controller.php";

if(isset($_SESSION['Action'])){
    switch ($_SESSION['Action']){
        case 'Next':
            NextState();
            break;
        case 'Pause':
            PauseState();
            break;
        case 'Restart':
            RestartState();
            break;
        default:
            NextState();
            break;
    }
}else{
    NextState();
}

