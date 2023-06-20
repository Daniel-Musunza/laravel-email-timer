<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SignUp;
class MailController extends Controller
{
    //
    public function sendMail() {
    // $name ="Mr Three Commas";
    //     Mail::to('dannyfesto1@gmail.com')->send(new SignUp($name));
    //     return view('welcome');


        $setTime = $_GET['time'];
        $setDate = $_GET['date'];
    
        // Create a new DateTime object for the user-set time and date
        $customTime = new DateTime($setDate . ' ' . $setTime);
    
        // Calculate the remaining time
        $currentTime = new DateTime();
        $remainingTime = $customTime->getTimestamp() - $currentTime->getTimestamp();
    
        // Check if remaining time is 1 hour or 24 hours
        if ($remainingTime <= 3600 && $remainingTime > 0) {
            // Send email when remaining time is 1 hour
            Mail::to('dannyfesto1@gmail.com')->send(new SignUp('1 Hour Remaining'));
        } else if ($remainingTime <= 86400 && $remainingTime > 0) {
            // Send email when remaining time is 24 hours
            Mail::to('dannyfesto1@gmail.com')->send(new SignUp('24 Hours Remaining'));
        }
    
        return view('welcome');
    }
}
