<?php 
use dg\Fournisseurs\Models\Suppliers;class Cms5b699322c8563585464507_16e3fa64a7c1a0e74ba28ac30972e676Class extends Cms\Classes\PageCode
{
  
public function onStart(){
    $this['supplier'] = Suppliers::where('slug', '=', $this->param('slug'))->first();
    //dd($this['supplier']);
  }
}
