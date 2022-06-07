<?php

namespace App\Services;

use Illuminate\Http\Request;

use Swift_Mailer;
use Mail;

class SendMail
{
    	
    public static function send($to,$sujet,$contenu)
    {

        $swiftTransport =  new \Swift_SmtpTransport( env('MAIL_HOST'), env('MAIL_PORT'), env('MAIL_ENCRYPTION')); 
        $swiftTransport->setUsername( env('MAIL_USERNAME')); //adresse email
        $swiftTransport->setPassword( env('MAIL_PASSWORD')); // mot de passe email

        $swiftMailer = new Swift_Mailer($swiftTransport);
        Mail::setSwiftMailer($swiftMailer);
        $from= env('MAIL_FROM_ADDRESS');
        $fromname= env('MAIL_FROM_NAME'); 

        Mail::send([], [], function ($message) use ($to,$sujet, $contenu,$from,$fromname   ) {
                $message
                  ->to($to)
                //->bcc($chunk ?: [])
                    ->subject($sujet)
                       ->setBody($contenu, 'text/html')
                    ->setFrom([$from => $fromname]);         

        });
    }
	
}