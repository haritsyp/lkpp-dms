<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $data = DB::select("SELECT *, @rownum := @rownum + 1 as row_number FROM `standartlkpp` cross join (select @rownum := 0) r order by cast(replace(standartid,'Standart ','') as integer) asc");
        View::share('standar', $data);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
