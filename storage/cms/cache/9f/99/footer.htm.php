<?php 
use Dg\Partenaires\Models\Partenaires;class Cms5b6317d4937ca308434574_3ff6223715203d23931492497328224aClass extends Cms\Classes\PartialCode
{

public function onStart(){
    
$this['partenaires'] = Partenaires::get();
//dd($this['partenaires']);
    
}
}
