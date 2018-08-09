<?php 
use Dg\Emploi\Models\Offres;use Dg\Pays\Models\Countries;class Cms5b6c394fea4a4900015833_4866a5a3b64545fa37d286c9dae2d0b2Class extends Cms\Classes\PageCode
{


public function onStart(){

$this['offres'] = Offres::get();
$this['countries'] = Countries::get();
$this['locale'] = App::getLocale();
$this['lien'] = 'detail-emploi';
//dump($this->locale);
if($this['locale'] == 'en') {$this['lien'] = 'job-details';}
//dd($this['offres']);
}
}
