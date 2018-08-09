<?php 
use Dg\Partenaires\Models\Partenaires;class Cms5b6c38ee4cde8929584676_368a46366fbfc8b8a8f6e9fa911b32deClass extends Cms\Classes\PartialCode
{

public function onStart(){
    
$this['partenaires'] = Partenaires::get();
//dd($this['partenaires']);
    
}
}
