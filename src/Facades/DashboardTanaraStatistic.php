<?php namespace Bantenprov\DashboardTanaraStatistic\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * The DashboardTanaraStatistic facade.
 *
 * @package Bantenprov\DashboardTanaraStatistic
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class DashboardTanaraStatistic extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'dashboard-tanara-statistic';
    }
}
