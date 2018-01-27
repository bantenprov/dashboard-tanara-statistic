<?php

Route::group(['prefix' => 'dashboard-tanara-statistic'], function() {
    Route::get('demo', 'Bantenprov\DashboardTanaraStatistic\Http\Controllers\DashboardTanaraStatisticController@demo');
});
