<?php

namespace App\Http\Controllers;

use App\Mail\ExampleMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //

    public function index()
    {
        return view('index');
    }

    public function mailMe()
    {
        Mail::to('ericrojas.ing@gmail.com')->send(new ExampleMail('Eric Rojas'));
        return view('sent');
    }
}
