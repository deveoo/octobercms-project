<?php 
use dg\Fournisseurs\Models\Suppliers;class Cms5b698fe5d6578004360923_552d5825a4524b33c77243561a976af8Class extends Cms\Classes\PageCode
{
  
public function onStart(){
    $this['suppliers'] = Suppliers::getActiveSuppliers();
  }
}
