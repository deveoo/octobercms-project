<?php 
use Dg\Documentsutiles\Models\Documents;use Dg\Pays\Models\Pays;class Cms5b62c807bc208467923963_3d1ae146368040a26eba9ffff91e6189Class extends Cms\Classes\PageCode
{


public function onStart(){

  $this['offres'] = Documents::get();
  ///dd($this['offres'] );
}
}
