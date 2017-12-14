<?php
/**
 * Created by PhpStorm.
 * User: huangchengwen
 * Date: 2017/11/14
 * Time: 11:05
 */

namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use App\Libraries\ReturnJson\ReturnJson;

class ReturnJsonServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('responsejson', function(){
            return new ReturnJson();
        });

        $this->app->bind('App\Libraries\ReturnJson', function(){
            return new ReturnJson();
        });
    }
}