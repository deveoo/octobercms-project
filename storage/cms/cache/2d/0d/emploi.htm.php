<?php 
use Dg\Emploi\Models\Offres;class Cms5b62de51ead0b533165190_b91325b374cb7141b2d8e270dd13339aClass extends Cms\Classes\PageCode
{

public function onStart(){

$this['offres'] = Offres::get();
$this['locale'] = App::getLocale();
$this['lien'] = 'detail-emploi';
//dump($this->locale);
if($this['locale'] == 'en') {$this['lien'] = 'job-details';}

}
}
