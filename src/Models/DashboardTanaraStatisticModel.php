<?php namespace Bantenprov\DashboardTanaraStatistic\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * The DashboardTanaraStatisticModel class.
 *
 * @package Bantenprov\DashboardTanaraStatistic
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class DashboardTanaraStatisticModel extends Model
{
    /**
    * Table name.
    *
    * @var string
    */
    protected $table = 'dashboard_tanara_statistic';

    /**
    * The attributes that are mass assignable.
    *
    * @var mixed
    */
    protected $fillable = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
