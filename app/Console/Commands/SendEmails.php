<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:send {user}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
         // $name = $this->ask('What is your name?');
         // if ($this->confirm('Do you wish to continue? [y|N]')) {
         // //
         // }
         $headers = ['Name', 'Email'];
         $users = User::all(['name', 'email'])->toArray();
         $this->table($headers, $users);


    }
}
