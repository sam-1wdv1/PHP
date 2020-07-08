<?php

class cilinder extends figuur {

    public function __construct($Ih, $Ir) {
        parent::__construct($Ih, $Ir);
    }
    
    public function getH() {
        return $this->x;
    }


    public function berekenOppervlakte() {
        $opp = (2 * self::$PI * $this->y * $this->y) + (2 * pi * $this->y * $this->x);
        $Ih = 10;
        $Ir = 3;
        return $opp;
    }
}