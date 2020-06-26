<?php



abstract class figuur {
    public static $PI = 3.1415;
    protected $x;
    protected $y;
    protected $r;
    protected $h;
    private $omschrijving;

    public function __construct($Ix, $Iy){
 
    }
    
    public function __construct($Ih, $Ir){
 
    }
    public function setX($Ix){
        if (!is_int($Ix)) {
            die("dat gaat niet");
        }
        $this->x = $Ix;
    }

    public function setX($Iy){
        if (!is_int($Iy)) {
            die("dat gaat niet");
        }
        $this->y = $Iy;
    }
    public function setX($Ih){
        if (!is_int($Ih)) {
            die("dat gaat niet");
        }
        $this->x = $Ih;
    }
    public function setX($Ir){
        if (!is_int($Ir)) {
            die("dat gaat niet");
        }
        $this->y = $Ir;
    }
}


