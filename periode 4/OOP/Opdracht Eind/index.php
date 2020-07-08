<?php

include 'figuur.class.php';
include 'cilinder.class.php';
include 'vierkant.class.php';

$cilindertje = new cilinder(10,3);
$opp = $cilindertje->berekenOppervlakte();
echo "de oppervlakte van cilinder met " . $cilindertje->hetH() . " is " . $opp;

$opp->setX(5);

$vierkantje = new vierkant(5);
$opp = $vierkantje->berekenOppervlakte();
echo "de oppervlakte van vierkant met is " . $opp;

$opp->setX(5);