<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendEmailReminder extends Command
{
    protected $signature = 'email:reminder';
    protected $description = 'Send email reminder at 8:00 and 10 minutes before set time';

    public function handle()
    {
        $currentDateTime = Carbon::now();
        $targetDateTime = Carbon::now()->setHour(8)->setMinute(0)->setSecond(0);

        if ($currentDateTime->diffInMinutes($targetDateTime) <= 10) {
            $user = [
                'email' => 'musunzafestus2019@gmail.com', // Replace with the user's email
                'name' => 'Musunza ' // Replace with the user's name
            ];

            Mail::send('emails.reminder', [], function ($message) use ($user) {
                $message->to($user['email'], $user['name'])
                    ->subject('Email Reminder');
            });

            $this->info('Email reminder sent!');
        } else {
            $this->info('No email reminder scheduled at the moment.');
        }
    }
}
