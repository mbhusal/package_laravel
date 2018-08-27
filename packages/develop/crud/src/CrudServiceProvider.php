<?php
/**
 * Created by PhpStorm.
 * User: ncs3
 * Date: 4/5/18
 * Time: 11:30 AM
 */
namespace  develop\crud;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class CrudServiceProvider extends ServiceProvider
{
    public function boot()
    {
        schema::defaultStringLength(191);
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views','viewpath');
    }

    public function register()
    {
        $this-> registerPublish();
    }

    public function registerPublish()
    {
        $basepath = dirname(__DIR__);

        $arr_data = [
        'migrations' => [
            "$basepath/../datamgmt/database/migrations"=> database_path('migrations')
            ],
            'config'=> [
                "$basepath/../datamgmt/config/data.php"=> config_path('data.php')

            ]
    ];
        foreach ($arr_data as $group=> $paths){
            $this->publishes($paths, $group);
        }
    }
}