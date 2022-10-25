<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        config(['app.locale' => 'id']);
        Carbon::setLocale('id');
        date_default_timezone_set('Asia/Jakarta');

        Paginator::useBootstrap();
        Blade::directive('dateFormat', function ($date) {
            //  h:i a
            return "<?= Carbon\Carbon::parse($date)->locale('id')->settings(['formatFunction' => 'translatedFormat'])->format('l, j F Y'); ?>";
        });
        Blade::directive('getPath', function ($path) {
            $basepath = "/storage/uploads/";
            return  $basepath . $path ."/";
        });
        $url = URL::current();
    }
}
