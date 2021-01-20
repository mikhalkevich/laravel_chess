<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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

        if(!isset($_COOKIE['king'])){
            $king_xy = env('KING_X', 2).','.env('KING_Y', 2);
            setcookie('king',$king_xy,time()+3600);
        }
        if(!isset($_COOKIE['queen'])){
            $queen_xy = env('QUEEN_X', 5).','.env('QUEEN_Y', 5);
            setcookie('queen',$queen_xy,time()+3600);
        }
    }
}
