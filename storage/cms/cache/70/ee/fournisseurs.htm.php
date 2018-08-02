<?php 
use dg\Fournisseurs\Models\Suppliers;class Cms5b6318a150342290702374_037050c576507fd9a83ff4827a2d794fClass extends Cms\Classes\PageCode
{
  
public function onStart(){
    $this['suppliers'] = Suppliers::getActiveSuppliers();
  }
}
