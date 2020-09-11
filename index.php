<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "Controller/Controller.php";

if(isset($_GET['Next'])) {

    NextState();

//}elseif (isset($_GET['Pause'])) {



//}//elseif (isset($_GET['Restart'])){


}
else {

    NextState();

}
