<?php 
use Dg\Partenaires\Models\Partenaires;class Cms5b69724a7bea4670994648_95b3d9878dd86dc74071ba4e0aa3d341Class extends Cms\Classes\PartialCode
{

public function onStart(){
    
$this['partenaires'] = Partenaires::get();
//dd($this['partenaires']);
    
}
}
