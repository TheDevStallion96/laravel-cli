<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use function Laravel\Prompts\text;

class GreetUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'laramin:greet-user';

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
        $name = text('What is your name?');
        // $name = $this->ask('What is your name?');

        // Store the name in a file (you can modify this logic as needed)
        Storage::put('user_name.txt', $name);

        $this->info("Hello, $name! Your name has been stored.");
    }
}
