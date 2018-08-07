<?php 
use Dg\Documentsutiles\Models\Documents;use Dg\Pays\Models\Pays;class Cms5b6995591e965924907406_57cec60720957558327293c992840e0fClass extends Cms\Classes\PageCode
{


public function onStart(){

  $this['offres'] = Documents::get();
  ///dd($this['offres'] );
}
}
