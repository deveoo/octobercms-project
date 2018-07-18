<?php namespace dg\Contact\Components;

use Cms\Classes\ComponentBase;
use Input;
use Mail;
use Validator;
use Redirect;

class ContactForm extends ComponentBase
{

    public function componentDetails(){
        return [
            'name' => 'Contact Form',
            'description' => 'Simple contact form'
        ];
    }


    public function onSend(){
        $validator = Validator::make(
            [
                'nom' => Input::get('nom'),
                'phone' => Input::get('phone'),
                'email' => Input::get('email'),
            ],
            [
                'nom' => 'required|min:5',
                'phone' => 'required|numeric|min:8',
                'email' => 'required|email'
            ]
        );

        if($validator->fails()){
            return Redirect::back()->withErrors($validator);
        } else {
            $vars = ['name' => Input::get('nom'),'phone' => Input::get('phone'),  'email' => Input::get('email'), 'content' => Input::get('message')];

            Mail::send('dg.contact::mail.message', $vars, function($message) {

                $message->to('youremail@gmail.com', 'Admin Person');
                $message->subject('New message from contact form');

            });
        }

    }

}
