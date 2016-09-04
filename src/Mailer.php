<?php

namespace Whyounes\Mailman;

use Illuminate\Contracts\Mail\Mailer as BaseMailer;

class Mailer implements BaseMailer
{

    public function raw($text, $callback)
    {

    }


    public function send($view, array $data = [], $callback = null)
    {

    }


    public function failures()
    {

    }

}