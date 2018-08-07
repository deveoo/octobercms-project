<?php namespace dg\Postuler\Components;

use Cms\Classes\ComponentBase;
use Input;
use Mail;
use Validator;
use Redirect;
use Dg\Postuler\Models\Postuler;
use Flash;

class PostulerForm extends ComponentBase
{

    public function componentDetails(){
        return [
            'name' => 'Postuler Form',
            'description' => 'formulaire pour postuler'
        ];
    }

    public function onSave(){

      $validator = Validator::make(
          [
              'offre_id' => Input::get('offre_id'),
              'nom' => Input::get('nom'),
              'phone' => Input::get('phone'),
              'email' => Input::get('email'),
              //'cv' => Input::file('cv')
        ],
          [
              'nom' => 'required|min:5',
              'phone' => 'required|numeric|min:8',
              'email' => 'required|email',
              //'cv' => 'required'
          ]
            //
      );

      if($validator->fails()){
          return Redirect::back()->withErrors($validator);
      } else {

        $postuler =  new Postuler();
        $postuler->offre_id = Input::get('offre_id');
        $postuler->nom = Input::get('nom');
        $postuler->phone = Input::get('phone');
        $postuler->email = Input::get('email');
        $postuler->cv = Input::file('cv');
        $postuler->description = Input::get('description');
        $postuler->save();

        Flash::success('OK');
        return Redirect::back();

      }
    }

  /*  public function onSend(){
        $validator = Validator::make(
            [
                'offre' => Input::get('offre'),
                'nom' => Input::get('nom'),
                'phone' => Input::get('phone'),
                'email' => Input::get('email'),
                'cv' => Input::file('cv')          ],
            [
                'nom' => 'required|min:5',
                'phone' => 'required|numeric|min:8',
                'email' => 'required|email',
                'cv' => 'required'
            ]
        );

        if($validator->fails()){
            return Redirect::back()->withErrors($validator);
        } else {
            $vars = ['name' => Input::get('nom'),'phone' => Input::get('phone'),  'email' => Input::get('email'), 'content' => Input::get('message')];

            Mail::send('dg.postuler::mail.message', $vars, function($message) {

                $message->to('youremail@gmail.com', 'Admin Person');
                $message->subject('New message from contact form');

            });
        }

    }*/

}
