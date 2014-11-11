
<?php

class Samochod
{
   public $marka;
   public $model;
   public $color;
   public $typ;
   public $marka2;
   public $model2;
   public $color2;
   public $typ2;
   
   
    function __construct() 
    {
        $this->marka = 'Ferrari';
        $this->model = 'LaFerrari';
        $this->color = 'Red';
        $this->typ = 'Kabriolet';
        
        $this->marka2 ="Fiat";
		$this->model2 ="126p";
		$this->kolor2 ="Rozowy";
		$this->typ2 ="Sedan";
    }
    
    public function helloSamochod()
    {
        return "Witaj! To ja  - Twoj samochod: $this->marka  $this->model  $this->color $this->typ ";
    }
    
    public function otoSamochod()
    {
        return "Witaj! To ja  - Twoj samochod: $this->marka2  $this->model2  $this->color2 $this->typ2";
    }
    
}
?>
