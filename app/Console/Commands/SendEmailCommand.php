<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SendEmailCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-email-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = "Mr Three Commas";
        Mail::to('dannyfesto1@gmail.com')->send(new SignUp($name));
        //
    }
  

}
