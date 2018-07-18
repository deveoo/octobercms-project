<?php namespace dg\Postuler\Components;

use Cms\Classes\ComponentBase;
use Input;
use Mail;
use Validator;
use Redirect;

class PostulerForm extends ComponentBase
{

    public function componentDetails(){
        return [
            'name' => 'Postuler Form',
            'description' => 'formulaire pour postuler'
        ];
    }


    public function onSend(){
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

    }

}
