<?php namespace dg\Formateurs;

use RainLab\User\Models\User as UserModel;
use RainLab\User\Controllers\Users as UsersController;
use dg\Formateurs\Models\Formateur as FormateurModel;

use System\Classes\PluginBase;

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
        //dd(FormateurModel::getFromUser($model)->user->groups[0]->id);exit;

        if(!$model instanceof UserModel)
          return;

          if (!$model->exists)
            return;

          // ensure tghat user exists before adding custom fields

          if(@FormateurModel::getFromUser($model)->user->groups[0]->id != 4 )
          return;

          FormateurModel::getFromUser($model);

          $groupsField = $form->getField('groups');

          if( $groupsField->value == Null )
              return;



          $form->addTabFields([
              'formateur[titre]' => [
                'label' => "Titre",
                'tab' => 'Formateur & consultant'
              ],

              'formateur[slug]' => [
                'label' => "URL",
                'tab' => 'Formateur & consultant'
              ],

              'formateur[nom_prenom]' => [
                'label' => "Nom & Prénom",
                'tab'   => 'Formateur & consultant',
              ],
              'formateur[email2]' => [
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
                'label' => "Youtube ou site personnel",
                'tab'   => 'Formateur & consultant',
              ],
              'formateur[image2]' => [
                'label' => "Photo",
                'tab'   => 'Fichier',
                'type'  => 'fileupload',
              ],

              'formateur[cv]' => [
                'label' => "CV",
                'tab'   => 'Fichier',
                'type'  => 'fileupload',
              ],

          ]);

      });

    }
}
