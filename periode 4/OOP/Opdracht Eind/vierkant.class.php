<?php

class vierkant extends figuur {

    public function __construct($Ix) {
        parent::__construct($Ix);
    }
    
    public function berekenOppervlakte() {
        $opp = ($this->x * $this->x);
        return $opp;
    }
}