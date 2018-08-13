<?php namespace dg\Fournisseurs;

use RainLab\User\Models\User as UserModel;
use RainLab\User\Controllers\Users as UsersController;
use dg\Fournisseurs\Models\Suppliers as ProfileModel;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
  public function registerComponents()
  {
    return [
          'dg\Fournisseurs\Components\SupplierFrontForm' => 'supplierfrontform',
      ];
  }

    public function registerSettings()
    {
    }

    /***** Ramzi BENZINA *****/

    public function boot()
    {
      UserModel::extend(function($model){
        $model->hasOne['supplier'] = ['dg\Fournisseurs\models\Suppliers'];
      });

      UsersController::extendFormFields(function($form,$model, $context){
        if(!$model instanceof UserModel)
          return;
        if (!$model->exists)
          return;

        // ensure tghat user exists before adding custom fields
        ProfileModel::getFromUser($model);

        $groupsField = $form->getField('groups');

        if( $groupsField->value == Null )
            return;

        if(@ProfileModel::getFromUser($model)->user->groups[0]->id == 3 )
          {
          $form->addTabFields([
              'supplier[titre]' => [
                'label' => "société",
                'tab' => 'Fournisseur'
              ],

              'supplier[extrait]' => [
                'label' => "Extrait",
                'tab'   => 'Fournisseur',
                'type'  =>  'textarea'
              ],
              'supplier[extrait]' => [
                'label' => "Extrait",
                'tab'   => 'Fournisseur',
                'type'  =>  'textarea'
              ],
              'supplier[description1]' => [
                'label' => "Description 1",
                'tab'   => 'Fournisseur',
                'type'  =>  'richeditor'
              ],
              'supplier[description2]' => [
                'label' => "Description 2",
                'tab'   => 'Fournisseur',
                'type'  =>  'richeditor'
              ],
              'supplier[map]' => [
                'label' => "Map",
                'tab'   => 'Coordonnées',
                'type'  =>  'textarea'
              ],
              'supplier[adresse1]' => [
                'label' => "Adresse 1",
                'tab'   => 'Coordonnées',
              ],
              'supplier[adresse2]' => [
                'label' => "Adresse 2",
                'tab'   => 'Coordonnées',
              ],

              'supplier[pays]' => [
                'label' => "Pays",
                'tab'   => 'Coordonnées',
                'type'  =>  'dropdown'
              ],

              'supplier[email]' => [
                'label' => "Email",
                'tab'   => 'Coordonnées',
              ],
              'supplier[phone]' => [
                'label' => "Téléphone",
                'tab'   => 'Coordonnées',
              ],
              'supplier[fax]' => [
                'label' => "fax",
                'tab'   => 'Coordonnées',
              ],
              'supplier[siteweb]' => [
                'label' => "Site web",
                'tab'   => 'Coordonnées',
                'placeholder' => 'http://'
              ],

              'supplier[facebook]' => [
                'label' => "Page Facebook",
                'tab'   => 'Coordonnées',
                'placeholder' => 'http://'
              ],

              'supplier[linkedin]' => [
                'label' => "Linkedin",
                'tab'   => 'Coordonnées',
                'placeholder' => 'http://'
              ],

              'supplier[twitter]' => [
                'label' => "Twitter",
                'tab'   => 'Coordonnées',
                'placeholder' => 'http://'
              ],

              'supplier[image]' => [
                'label' => "Logo",
                'tab'   => 'Fournisseur',
                'type'  => 'fileupload',

              ],
          ]);
        }

      });

      //$user ->supplier->blabla

    }


}
