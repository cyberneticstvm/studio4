<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\MyEmail;

class EmailController extends Controller
{
    public function index(){
        $mailData = [
            'title' => 'Mail from studio1creators.com',
            'body' => 'This is for testing email using smtp.'
        ];
         
        Mail::to('mail@cybernetics.me')->send(new MyEmail($mailData));
           
        dd("Email is sent successfully.");
    }
}
