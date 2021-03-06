<?php

namespace Laravel\Telescope\Console;

use Illuminate\Console\Command;
use Laravel\Telescope\Contracts\EntriesRepository;

class ClearCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'telescope:clear';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear all entries from Telescope';

    /**
     * Execute the console command.
     *
     * @param  \Laravel\Telescope\Contracts\EntriesRepository  $storage
     * @return void
     */
    public function handle(EntriesRepository $storage)
    {
        $storage->clear();

        $this->info('Telescope entries cleared!');
    }
}
