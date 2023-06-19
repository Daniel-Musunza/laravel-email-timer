<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SignUp;
class MailController extends Controller
{
    //
    public function sendMail() {
    $name ="Mr Three Commas";
        Mail::to('dannyfesto1@gmail.com')->send(new SignUp($name));
        
        return view('welcome');
    }
}
