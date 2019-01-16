<?php
<<<<<<< HEAD

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

=======
namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
>>>>>>> cdb8a7b65944344a286b59b6b0c34fffc086d79f
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
<<<<<<< HEAD

=======
>>>>>>> cdb8a7b65944344a286b59b6b0c34fffc086d79f
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> cdb8a7b65944344a286b59b6b0c34fffc086d79f
