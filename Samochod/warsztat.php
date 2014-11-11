<?php

include_once("class.samochod.php");
$samochod = new Samochod();
$samochodHelloSamochod = $samochod->helloSamochod();
echo $samochodHelloSamochod ;

$s = new Samochod();
$sHelloSamochod = $s->otoSamochod();
echo $sHelloSamochod;

/*$s = new Samochod;

public function otoSamochod(Samochod $s)
{
    
}
*/
?>