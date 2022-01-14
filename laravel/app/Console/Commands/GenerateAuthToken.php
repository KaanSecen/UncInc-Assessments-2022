<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GenerateAuthToken extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:token';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generates a new api client auth token';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // Generate a token
        $token = Str::random(60);

        // Create a new entry with the hashed token value
        DB::table('api_clients')->insert([
            'api_token' => hash('sha256', $token),
        ]);

        // Send the token out
        $this->info($token);

    }
}
