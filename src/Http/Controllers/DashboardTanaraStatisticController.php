<?php namespace Bantenprov\DashboardTanaraStatistic\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Bantenprov\DashboardTanaraStatistic\Facades\DashboardTanaraStatistic;
use Bantenprov\DashboardTanaraStatistic\Models\DashboardTanaraStatisticModel;

/**
 * The DashboardTanaraStatisticController class.
 *
 * @package Bantenprov\DashboardTanaraStatistic
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class DashboardTanaraStatisticController extends Controller
{
    public function demo()
    {
        return DashboardTanaraStatistic::welcome();
    }
}
