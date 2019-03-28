<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Card extends Mailable
{
    use Queueable, SerializesModels;

    public $name,$email,$msg,$address;
    public function __construct($name,$email,$msg,$address)
    {
        $this->name=$name;
        $this->email=$email;
        $this->msg=$msg;
        $this->address=$address;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       

        $gray=array('act'=>$this->name,'yes' => $this->email ,'no'=>$this->msg,'add'=>$this->address);
        return $this->view('website.MailTemplate',compact('gray'))->to($this->email);
      
    }
}
