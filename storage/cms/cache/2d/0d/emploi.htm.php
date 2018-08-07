<?php 
use Dg\Emploi\Models\Offres;class Cms5b6991517e832961731552_0a1a459c931481733b40556addc1d8d6Class extends Cms\Classes\PageCode
{

public function onStart(){

$this['offres'] = Offres::get();
$this['locale'] = App::getLocale();
$this['lien'] = 'detail-emploi';
//dump($this->locale);
if($this['locale'] == 'en') {$this['lien'] = 'job-details';}

}
}
