<?php namespace Bantenprov\DashboardTanaraStatistic\Console\Commands;

use Illuminate\Console\Command;

/**
 * The DashboardTanaraStatisticCommand class.
 *
 * @package Bantenprov\DashboardTanaraStatistic
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class DashboardTanaraStatisticCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bantenprov:dashboard-tanara-statistic';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Demo command for Bantenprov\DashboardTanaraStatistic package';

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
        $this->info('Welcome to command for Bantenprov\DashboardTanaraStatistic package');
    }
}
