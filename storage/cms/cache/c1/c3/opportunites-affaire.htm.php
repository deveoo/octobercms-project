<?php 
use Dg\OpportunitesDAffaires\Models\ListeOpportunites;class Cms5b6318a871ca5514596243_3ce4adc3743ccad6e4657a0b512130d7Class extends Cms\Classes\PageCode
{

public function onStart(){

$this['offres'] = ListeOpportunites::get();
$this['locale'] = App::getLocale();
$this['lien'] = 'detail-opportunite';
if($this['locale'] == 'en') $this['lien'] = 'opportunity-details';

}
}
