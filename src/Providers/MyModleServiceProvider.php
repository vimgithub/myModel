<?php

namespace Zev\MyModel;

use Illuminate\Support\ServiceProvider;
use Zev\Entrance\Entrance;
use Zev\MyModel\Commands\InstallDatabase;

class MyModleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //发布配置文件（可根据需要发布配置、路由、控制器、前端文件、视图等）
        $this->publishes([
            __DIR__.'/../config/mymodel.php' => config_path('mymodel.php')
        ], 'myModel');

        //发布assets-注意模块层级
        $this->publishes([
            __DIR__.'/../assets' => public_path('mymodel')
        ], 'myModel');


        //加载路由
        $this->loadRoutesFrom(__DIR__.'/../routes/mymodel.php');

        //加载视图
        $this->loadViewsFrom(__DIR__.'/../views', 'MyModel');

        //加载迁移文件
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        //注册Artisan 命令
        $this->commands([InstallDatabase::class]);

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // Register the application bindings.
        $this->app->bind('MyModel', function ($app) {
            return new Entrance($app);
        });

        // Register the alias.
        $this->app->alias('MyModel', 'Zev\MyModel\Entrance');
    }
}
