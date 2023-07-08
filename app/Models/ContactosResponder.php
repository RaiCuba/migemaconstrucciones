<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Database\Eloquent\Model;

use App\Models\Contactos;


class ContactosResponder extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;
    public $message;

    public function __construct($message, $id)
    {
        $this->contact = Contactos::find($id);
        $this->message = $message;
    }

    public function build()
    {
        return $this->view('emails.contact_reply')
                    ->subject('Respuesta a tu correo electrónico');
    }
}
