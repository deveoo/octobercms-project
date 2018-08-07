<?php 
use Dg\OpportunitesDAffaires\Models\ListeOpportunites;class Cms5b6991727f350748816012_e32e3acd385ad08093303e1bf2679a22Class extends Cms\Classes\PageCode
{

public function onStart(){

$this['offres'] = ListeOpportunites::get();
$this['locale'] = App::getLocale();
$this['lien'] = 'detail-opportunite';
if($this['locale'] == 'en') $this['lien'] = 'opportunity-details';

}
}
