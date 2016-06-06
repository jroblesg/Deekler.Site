<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use View;
use Arcanedev\NoCaptcha\NoCaptcha;
use Illuminate\Support\Facades\Input;


class ContactUsController extends Controller
{
    
    public function store(Request $request){
            
            $inputs   = Input::all();
                $rules    = [
                // Other validation rules...
                'g-recaptcha-response' => 'required|captcha',
            ];
            $messages = [
                'g-recaptcha-response.required' => 'Your custom validation message.',
                'g-recaptcha-response.captcha'  => 'Your custom validation message.',
            ];

            $validator = Validator::make($inputs, $rules, $messages);

            if ($validator->fails()) {
                $errors = $validator->messages();

                var_dump($errors->first('g-recaptcha-response'));

                // Redirect back or throw an error
                return redirect()->back()->withErrors(['Wrong Captcha'])->withInput();
            }else{
                //Sino enviamos el mail y damos OK al user
            Mail::send('emails.contacto',['request' => $request],function($message) use ($request){
            $email = $request->input('email');
            $name = $request->input('name');
            $subject = $request->input('subject');
            $msg = $request->input('message');
            $skype = $request->input('skype');
            $lang = $request->input('lang');
            $tipo = $request->input('type');
            $message->to('contacto@deekler.com','Contacto Deekler')
            ->from('contacto@deekler.com', $name . ' from Deekler/Contact')
            ->subject($subject)->setBody('<center>Este es un mensaje enviado desde el sitio web de deekler.com solicitando información sobre '.$tipo.'</center><br><br><b>User Data:</b><br>Skype: '.$skype.'<br>Lenguaje: '.$lang.'<br><br><b>Message:</b> <br>'.$msg); 
            });
            echo "listo";
            }
            
    }
}
