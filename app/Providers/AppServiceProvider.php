<?php

namespace App\Providers;

use App\Models\Client;
use App\Models\Gallery;
use App\Models\Post;
use App\Models\Slider;
use App\Models\Subscribe;
use App\Models\Tour;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('pages.tours-index', function ($view) {
            $tours = Cache::rememberForever('tours',function () {
                return Tour::orderBy('created_at','desc')->get();
            });

            $view->with('tours', $tours);
        });

        view()->composer('pages.gallery-index', function ($view) {
            $galleries = Cache::rememberForever('galleries',function () {
                return Gallery::orderBy('created_at','desc')->get();
            });
            $view->with('galleries',$galleries);
        });

        view()->composer('pages.slider', function ($view) {

            $sliders = Cache::rememberForever('sliders',function () {
                return Slider::all();
            });
            $view->with('sliders',$sliders);
        });

        view()->composer('pages.clients', function ($view) {
            $view->with('clients',Client::all());
        });



        //subscribe.blade.php

    }
}
