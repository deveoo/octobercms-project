<?php 
use Ramzibenzina\Bandeau\Models\Bandeau;use Dg\Produitetservices\Models\Produits;class Cms5b6c38ed7ba8e222954617_48e4ee440067287a5bb8b8f0b91ffdc1Class extends Cms\Classes\PageCode
{


public function onStart(){
  $this['bandeaux'] = Bandeau::get();
  $this['Produits'] = Produits::get();
  //dd($this['Produits']);
}
}
