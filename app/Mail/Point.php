<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Point extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data,$archivo)
    {
        $this->data = $data;
        $this->archivo = $archivo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('diego979753958@gmail.com',"Arigi Home")
                    ->subject("Puntos - arigihome")
                    ->view('email.point')
                    ->with($this->data)
                    ->attach($this->archivo->getRealPath(), [
                        'as' => $this->archivo->getClientOriginalName(),
                    ]);
    }
}
