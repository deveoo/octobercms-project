<?php 
use Ramzibenzina\Bandeau\Models\Bandeau;class Cms5b698a0d26845676541420_6dff77b5d2ba23b5692c60626adc89edClass extends Cms\Classes\PageCode
{

public function onStart(){

$this['bandeaux'] = Bandeau::get();
//dd($this['bandeaux']);

}
}
