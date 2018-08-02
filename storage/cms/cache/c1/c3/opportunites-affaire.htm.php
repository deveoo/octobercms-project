<?php 
use Dg\OpportunitesDAffaires\Models\ListeOpportunites;class Cms5b62c7fd2261e027619301_71f3cdb523c7938c712b8868de9a77d5Class extends Cms\Classes\PageCode
{

public function onStart(){

$this['offres'] = ListeOpportunites::get();
$this['locale'] = App::getLocale();
$this['lien'] = 'detail-opportunite';
if($this['locale'] == 'en') $this['lien'] = 'opportunity-details';

}
}
