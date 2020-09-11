<?php


class TrafficLight
{
    private $red = false;
    private $yellow = false;
    private $green = false;
    private $blink = false;

    public function SetState($state = 0){

            switch($state)
            {
                case 0:
                    $this -> red    = true;
                    $nextState = ($state +1) % 4;
                    break;
                case 1:
                    $this -> red    = true;
                    $this -> yellow = true;
                    $nextState = ($state +1) % 4;
                    break;
                case 2:
                    $this -> green  = true;
                    $nextState = ($state +1) % 4;
                    break;
                case 3:
                    $this -> yellow = true;
                    $nextState = ($state +1) % 4;
                    break;
                case 4:
                    $this -> blink = true;
                    $nextState = 4;
                    break;
                default:
                    break;
            }



        return $nextState;
    }



    function GetRedCircle(){
        return $this -> red;
    }
    function GetYellowCircle(){
        return $this -> yellow;
    }
    function GetGreenCircle(){
        return $this -> green;
    }
    function GetBlinkCircle(){
        return $this -> blink;
    }

}