<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ResetCodeMail extends Mailable
{
    public $resetCode;

    public function __construct($resetCode)
    {
        $this->resetCode = $resetCode;
    }

    public function build()
    {
        return $this->subject('Votre code pour réinitialiser votre mot de passe')
                    ->view('emails.reset_code'); // Utilisez le nom de la vue ici
    }
 
}

?>
