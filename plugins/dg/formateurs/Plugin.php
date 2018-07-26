<?php namespace dg\Formateurs;

use System\Classes\PluginBase;

use RainLab\User\Models\User as UserModel;
use RainLab\User\Controllers\Users as UsersController;
use dg\Formateurs\Models\Formateur as ProfileModel;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }

    /***** Ramzi BENZINA *****/

    public function boot()
    {
      UserModel::extend(function($model){
        $model->hasOne['formateur'] = ['dg\Formateurs\Models\Formateur'];
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

        if(ProfileModel::getFromUser($model)->user->groups[0]->id != 4 )
          return;

          $form->addTabFields([
              'formateur[titre]' => [
                'label' => "Titre",
                'tab' => 'Formateur & consultant'
              ],

              'formateur[nom_prenom]' => [
                'label' => "Nom & Prénom",
                'tab'   => 'Formateur & consultant',
              ],
              'formateur[email]' => [
                'label' => "Email",
                'tab'   => 'Formateur & consultant',
              ],
              'formateur[tel]' => [
                'label' => "Téléphone",
                'tab'   => 'Formateur & consultant',
              ],
              'formateur[poste]' => [
                'label' => "Poste",
                'tab'   => 'Formateur & consultant',
              ],

              'formateur[description]' => [
                'label' => "Description",
                'tab'   => 'Formateur & consultant',
                'type'  =>  'textarea'
              ],

              'formateur[linkedin_viadeo]' => [
                'label' => "Linkedin",
                'tab'   => 'Formateur & consultant',
              ],

              'formateur[youtube_siteperso]' => [
                'label' => "Youtube /site personnel",
                'tab'   => 'Formateur & consultant',
              ],

          ]);

      });

    }
}
