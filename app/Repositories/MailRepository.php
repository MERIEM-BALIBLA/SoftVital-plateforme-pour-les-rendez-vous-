<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Mail;

class MailRepository
{
    public function sendPasswordResetEmail($email, $token, $userName)
    {
        Mail::send('email.forget_password', ['token' => $token, 'userName' => $userName], function($message) use ($email) {
            $message->to($email);
            $message->subject('Réinitialiser votre mot de passe');
        });
    }
}
