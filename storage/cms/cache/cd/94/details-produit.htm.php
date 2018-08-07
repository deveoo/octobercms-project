<?php 
use dg\ProduitEtServices\Models\Produits;class Cms5b69914d56e42392006960_e5f06fb38eea211c08f705e364124508Class extends Cms\Classes\PageCode
{
  
public function onStart(){
    $this['produit'] = Produits::where('slug', '=', $this->param('slug'))->first();
  }
}
