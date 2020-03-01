<?php

namespace DesignByCode\LunaUi;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class ControllersCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'lunaui:controllers';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Scaffold the authentication controllers';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        if (! is_dir($directory = app_path('Http/Controllers/Auth'))) {
            mkdir($directory, 0755, true);
        }

        (new Filesystem)->copyDirectory(
            __DIR__.'/../stubs/Auth',
            app_path('Http/Controllers/Auth')
        );

        $this->info('Authentication scaffolding generated successfully.');
    }
}
