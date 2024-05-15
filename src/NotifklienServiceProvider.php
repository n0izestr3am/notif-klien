<?php

namespace n0izestr3am\notifklien;
use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use n0izestr3am\notifklien\Middleware\AppExpiredChecker;
class NotifklienServiceProvider extends ServiceProvider
{


     protected $defer = false;

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->publishFiles();
        $this->loadRoutesFrom(__DIR__ . '/../routes/api.php');
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(Router $router)
    {
        $router->middlewareGroup('expired', [AppExpiredChecker::class]);

    }

    protected function publishFiles()
    {
        $this->publishes([
            __DIR__.'/../config/' => config_path('n0izestr3am')],'notif-klien');
       
        $this->publishes([
            __DIR__.'/../seeders/' => database_path('seeders'),
        ], 'notif-klien');

       $this->publishes([
            __DIR__.'/../Views' => base_path('resources/views/vendor'),
        ], 'notif-klien');

    }








}
