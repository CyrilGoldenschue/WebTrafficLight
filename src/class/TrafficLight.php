<?php


class TrafficLight
{
    private $red = false;
    private $yellow = false;
    private $green = false;

    public function SetState($state = 0){

        $nextState = ($state +1) % 4;

            switch($state)
            {
                case 0:
                    $this -> red    = true;
                    break;
                case 1:
                    $this -> red    = true;
                    $this -> yellow = true;
                    break;
                case 2:
                    $this -> green  = true;
                    break;
                case 3:
                    $this -> yellow = true;
                    break;
                case 4:
                    $this -> yellow = true;
                    $nextState = 4;
                    break;
                default:
                    break;
            }



        return $nextState;
    }

    function Next($state = 0){
        $nextState = ($state +1) % 4;

        return "/?light=".$nextState;
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

}