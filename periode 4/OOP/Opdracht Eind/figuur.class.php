<?php



abstract class figuur {
    public static $PI = 3.1415;
    protected $x;
    protected $y;
    private $omschrijving;

    public function __construct($Ix, $Iy){
        $this->setX($Ix);
        $this->setY($Iy);
    }
    
    public function setX($Ix){
        if (!is_int($Ix)) {
            die("dat gaat niet");
        }
        $this->x = $Ix;
    }

    public function setY($Iy){
        if (!is_int($Iy)) {
            die("dat gaat niet");
        }
        $this->y = $Iy;
    }
}


