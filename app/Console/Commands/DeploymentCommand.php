<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class DeploymentCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:deploy';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Deployment command';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        exec('npm install --omit=dev');

        exec('npm run build');

        Artisan::call('optimize:clear');
    }
}
