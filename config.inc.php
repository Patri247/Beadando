<?php
$ablakcim = array(
    'cim' => 'Beadandó',
);

$oldalak = array(
    '/' => array('fajl' => 'fooldal', 'szoveg' => 'Főoldal', 'menun' => array(1,1)),
	'rolunk' => array('fajl' => 'rolunk', 'szoveg' => 'Rólunk', 'menun' => array(1,1)),
	'kepgaleria' => array('fajl' => 'kepgaleria', 'szoveg' => 'Képgaléria', 'menun' => array(1,1)),
	'kapcsolat' => array('fajl' => 'kapcsolat', 'szoveg' => 'Kapcsolat', 'menun' => array(1,1)),
    'emailek' => array('fajl' => 'emailek', 'szoveg' => 'E-mailek', 'menun' => array(1,1)),
    'belepes' => array('fajl' => 'belepes', 'szoveg' => 'Belépés', 'menun' => array(1,0)),
    'kilepes' => array('fajl' => 'kilepes', 'szoveg' => 'Kilépés', 'menun' => array(0,1)),
    'belep' => array('fajl' => 'belep', 'szoveg' => '', 'menun' => array(0,0)),
    'regisztral' => array('fajl' => 'regisztral', 'szoveg' => '', 'menun' => array(0,0))
);

$lablec = array(
    'copyright' => ' '.date("Y").'.',
   
);


$hiba_oldal = array ('fajl' => '404', 'szoveg' => 'A keresett oldal nem található!');
?>