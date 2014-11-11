<?php

class SamochodWyscigowy extends Silnik
{
	public $predkosc_maksymalna;
	public function getPredkoscMaksymalna($nazwa, $wartosc)
	{
	if( ($nazwa = "predkosc_maksymalna")
	&& ($wartosc > 0)
	&& ($wartosc < 400) ) 
	{
	$this->predkosc_maksymalna = $wartosc;
	} else 
	{
	echo "Za duza predkosc";
	}
    }
}
	
    $ferrari = new SamochodWyscigowy;
        $ferrari->$predkosc_maksymalna =200;
        echo $ferrari->predkosc_maksymalna;
        /* }
	public function getPrzyspieszenie(){
}*/

?>