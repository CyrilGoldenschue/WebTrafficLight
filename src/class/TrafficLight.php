<?php


class TrafficLight
{
    public $red = false;
    public $yellow = false;
    public $green = false;

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
            default:
                break;
        }

        return "/?light=".$nextState;
    }

}