<?php 
use Dg\Emploi\Models\Offres;class Cms5b6317ef04783744393692_f253349305bf1a273af44728c644009aClass extends Cms\Classes\PageCode
{

public function onStart(){

$this['offres'] = Offres::get();
$this['locale'] = App::getLocale();
$this['lien'] = 'detail-emploi';
//dump($this->locale);
if($this['locale'] == 'en') {$this['lien'] = 'job-details';}

}
}
