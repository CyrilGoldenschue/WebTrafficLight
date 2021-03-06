<?php


class TrafficLight
{
    private $red = false;
    private $yellow = false;
    private $green = false;
    private $blink = false;
    private $pause = false;
    private $timer = 0;

    public function SetState($state = 0){

            switch($state)
            {
                case 0: //stop
                    $this -> red    = true;
                    $this -> pause = true;
                    $this -> timer = 10000;
                    $nextState = $this -> Next($state);
                    break;
                case 1: //set
                    $this -> red    = true;
                    $this -> yellow = true;
                    $this -> timer = 1500;
                    $nextState = $this -> Next($state);
                    break;
                case 2: //go
                    $this -> green  = true;
                    $this -> pause = true;
                    $this -> timer = 5000;
                    $nextState = $this -> Next($state);
                    break;
                case 3: //slow
                    $this -> yellow = true;
                    $this -> timer = 1500;
                    $nextState = $this -> Next($state);
                    break;
                case 4: //pause
                    $this -> yellow = true;
                    $this -> blink = true;
                    $nextState = 4;
                    break;
                default:
                    break;
            }


        return $nextState;
    }

    function Next($state=0){

        $nextState = ($state +1) % 4;
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
    function GetPauseState(){
        return $this -> pause;
    }
    function GetTimer(){
        return $this -> timer;
    }

}