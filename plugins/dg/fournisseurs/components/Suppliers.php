<?php namespace dg\Fournisseurs\Components;

use Cms\Classes\ComponentBase;
use dg\Fournisseurs\Controllers\Suppliers as SuppliersController;
use dg\Fournisseurs\Models\Suppliers;

class Suppliers extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'EntryForm Component',
            'description' => 'Backend form used in the front-end'
        ];
    }

    public function onRun()
    {
        // Build a back-end form with the context of 'frontend'
        $formController = new SuppliersController();
        $formController->create('frontend');

        // Append the formController to the page
        $this->page['form'] = $formController;

        // Append the missing style file so that our front-end forms would look
        // just like back-end
        $this->addCss('/modules/backend/assets/css/controls.css', 'core');
    }

    public function onSave()
    {
        return ['error' => SuppliersController::create(post('Suppliers'))];
    }

}
