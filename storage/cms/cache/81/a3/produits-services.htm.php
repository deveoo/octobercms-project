<?php 
use dg\Produitetservices\Models\Produits;class Cms5b69914a3ab6d949439956_702db281342f6dec05f9a7447bb6d08eClass extends Cms\Classes\PageCode
{
  
public function onStart(){
    $this['products'] = Produits::get();
  }
}
