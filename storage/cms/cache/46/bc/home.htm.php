<?php 
use Ramzibenzina\Bandeau\Models\Bandeau;class Cms5b6317e178903475950018_1f70b3aa3eec43b0717e9aba3d52d561Class extends Cms\Classes\PageCode
{

public function onStart(){

$this['bandeaux'] = Bandeau::get();
//dd($this['bandeaux']);

}
}
