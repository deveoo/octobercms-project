<?php 
use Dg\Partenaires\Models\Partenaires;class Cms5b62c75b6a85c502766700_63f5c50fadfa86474ced0b2775cc2d4fClass extends Cms\Classes\PartialCode
{

public function onStart(){
    
$this['partenaires'] = Partenaires::get();
//dd($this['partenaires']);
    
}
}
