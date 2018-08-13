<?php namespace dg\Fournisseurs\Components;

use Cms\Classes\ComponentBase;
use Dg\Fournisseurs\Controllers\Suppliers as SuppliersController;
use Dg\Fournisseurs\Models\Suppliers;
use RainLab\User\Models\Settings as UserSettings;

use Input;
use Mail;
use Validator;
use Redirect;
use Str;
use Flash;
use Auth;

class SupplierFrontForm extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'FrontForm Component',
            'description' => 'frontend form for supplier account'
        ];
    }

    public function onUpdate(){

      $validator = Validator::make(
          [
              'titre' => Input::get('titre'),
              'phone' => Input::get('phone'),
              'email' => Input::get('email'),
              'extrait' => Input::get('extrait'),
              'facebook' => Input::get('facebook'),
              'siteweb' => Input::get('siteweb'),
              'linkedin' => Input::get('linkedin'),
              'twitter' => Input::get('twitter'),
              'image' => Input::file()
        ],
          [
              'titre' => 'required|min:2',
              'phone' => 'required|numeric|min:8',
              'email' => 'required|email',
              'extrait' => 'required|min:2',
              //'image' => 'mimes:jpeg,bmp,png',
              'facebook' => 'active_url',
              'siteweb' => 'active_url',
              'linkedin' => 'active_url',
              'twitter' => 'active_url',
              //'cv' => 'required'
          ]
            //
      );

      if($validator->fails()){
          return Redirect::back()->withErrors($validator);
      } else {
          $user = Auth::getUser();
          //$current = Suppliers::getCurrentSupplier($user->id);
          $this->supplier = Suppliers::getCurrentSupplier($user->id);
        $suppliers = Suppliers::getCurrentSupplier($user->id);

        if (empty($suppliers->slug)) {
          unset($suppliers->slug);
          $suppliers->slug =   Str::slug(Input::get('titre')."-".Input::get('user_id'));
        }

        $suppliers->titre = Input::get('titre');
        $suppliers->extrait = Input::get('extrait');
        $suppliers->description1 = Input::get('description1');
        $suppliers->description2 = Input::get('description2');
        $suppliers->map = Input::get('map');
        $suppliers->adresse1 = Input::get('adresse1');
        $suppliers->adresse2 = Input::get('adresse2');
        $suppliers->email = Input::get('email');
        $suppliers->phone = Input::get('phone');
        $suppliers->fax = Input::get('fax');
        $suppliers->siteweb = Input::get('siteweb');
        $suppliers->facebook = Input::get('facebook');
        $suppliers->linkedin = Input::get('linkedin');
        $suppliers->twitter = Input::get('twitter');
        $suppliers->image = Input::file('image');

        $suppliers->update();

        Flash::success('OK');
        return Redirect::back();

      }
    }



}
