<?php


class TrafficLight
{
    public $red;
    public $yellow;
    public $green;

    public function SetState($state = 0){

        $nextState = ($state +1) % 4;

        switch($state)
        {
            case 0:
                $this -> red    = "RedCircle";
                $this -> yellow = "ExtinctCircle";
                $this -> green  = "ExtinctCircle";
                break;
            case 1:
                $this -> red    = "RedCircle";
                $this -> yellow = "OrangeCircle";
                $this -> green  = "ExtinctCircle";
                break;
            case 2:
                $this -> red    = "ExtinctCircle";
                $this -> yellow = "ExtinctCircle";
                $this -> green  = "GreenCircle";
                break;
            case 3:
                $this -> red    = "ExtinctCircle";
                $this -> yellow = "OrangeCircle";
                $this -> green  = "ExtinctCircle";
                break;
            default:
                $this -> red    = "ExtinctCircle";
                $this -> yellow = "ExtinctCircle";
                $this -> green  = "ExtinctCircle";
                break;
        }

        return "/?light=".$nextState;
    }

}