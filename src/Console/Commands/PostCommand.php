<?php

namespace Soulplus\Posts\Console\Commands;

use Illuminate\Console\Command;

class PostCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'posts:install';

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
        $ask = $this->ask("Ready?");
        dd($ask);
    }


}
