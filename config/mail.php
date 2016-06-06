<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Mail Driver
    |--------------------------------------------------------------------------
    |
    | Laravel supports both SMTP and PHP's "mail" function as drivers for the
    | sending of e-mail. You may specify which one you're using throughout
    | your application here. By default, Laravel is setup for SMTP mail.
    |
    | Supported: "smtp", "mail", "sendmail", "mailgun", "mandrill",
    |            "ses", "sparkpost", "log"
    |
    */

    'driver' => 'smtp',

    'host' => 'mail.deekler.com',

    'port' =>  26,

    'from' => array('address' => 'contacto@deekler.com', 'name' => 'Contacto'),

    'encryption' =>  '',

    'username' => 'contacto@deekler.com',//'username' => env('MAIL_USERNAME'),

    'password' => 'deekler*2016',//'password' => env('MAIL_PASSWORD'),
   
    'sendmail' => '/usr/sbin/sendmail -bs',
    
    'pretend' => false,

];
