<?php

namespace KongQi\Webupload;

use Illuminate\Support\ServiceProvider;


class WebUploadServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //把配置文件放在config
        $this->publishes([  
            __DIR__ . '/../config/webupload.php' => config_path('webupload.php'),  
        ]);  
    }

    /**
     * Register the application services.
     *
     * @return void
     * @author LaravelAcademy.org
     */
    public function register()
    {
       
       $this->app['webupload'] = $this->app->share(function ($app) {  
            return new Webupload();  
        });  
    }
    public function provides()  
   {  
       return ['webupload'];  
   }  
}
