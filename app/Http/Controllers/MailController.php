<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SignUp;

class MailController extends Controller
{
    public function sendMail()
    {
        $setTime = "18:04";
        $reminderTime = "15:42";
        $setDate = "20/06/2023";
    
        // Convert date format from "d/m/Y" to "Y-m-d"
        $formattedDate = DateTime::createFromFormat('d/m/Y', $setDate)->format('Y-m-d');
    
        // Create a new DateTime object for the user-set time and date
        $customTime = new DateTime($formattedDate . ' ' . $setTime);
    
        // Calculate the remaining time
        $currentTime = new DateTime();
        $remainingTime = $customTime->getTimestamp() - $currentTime->getTimestamp();
    
        // Check if remaining time is 4 hours and current time matches the desired time
        if ($remainingTime <= 14400 && $remainingTime > 0) {
            // Send email when remaining time is 4 hours and current time matches desired time
            Mail::to('dannyfesto1@gmail.com')->send(new SignUp('You have a meeting on' .' ' .'at ' . $setTime));
        }
    
        return view('welcome');
    }
    
}
