<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class AbandonedCartReminder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    // protected $signature = 'app:abandoned-cart-reminder';
    protected $signature = 'cart:abandoned';

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
        //
    }
}
