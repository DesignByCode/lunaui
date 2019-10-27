<?php

namespace DesignByCode\LunaUi;

use InvalidArgumentException;
use Illuminate\Console\Command;

class LunaUiCommand extends Command
{
    /**
     * The console command signature.
     *
     * @var string
     */
    protected $signature = 'ui
                    { type : The preset type (luna, vue) }
                    { --auth : Install authentication UI scaffolding }
                    { --option=* : Pass an option to the preset command }';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Swap the front-end scaffolding for the application';

    /**
     * Execute the console command.
     *
     * @return void
     *
     * @throws \InvalidArgumentException
     */
    public function handle()
    {
        if (static::hasMacro($this->argument('type'))) {
            return call_user_func(static::$macros[$this->argument('type')], $this);
        }

        if (! in_array($this->argument('type'), ['luna', 'vue'])) {
            throw new InvalidArgumentException('Invalid preset.');
        }

        $this->{$this->argument('type')}();

        if ($this->option('auth')) {
            $this->call('ui:auth');
        }
    }

    /**
     * Install the "luna-sass" preset.
     *
     * @return void
     */
    protected function luna()
    {
        Presets\LunaSass::install();

        $this->info('Luna scaffolding installed successfully.');
        $this->comment('Please run "yarn && npm run watch" to compile your fresh scaffolding.');
    }

    /**
     * Install the "vue" preset.
     *
     * @return void
     */
    protected function vue()
    {
        Presets\LunaSass::install();
        Presets\Vue::install();

        $this->info('Vue with luna scaffolding installed successfully.');
        $this->comment('Please run "yarn && npm run watch" to compile your fresh scaffolding.');
    }

}
