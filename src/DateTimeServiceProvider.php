<?php
namespace benancetin\datetime;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class DateTimeServiceProvider extends ServiceProvider
{
    /**
    * Bootstrap the application services.
    *
    * @return void
    */
    public function boot()
    {
        Blade::directive('datetime', function ($expression) {
            return '<?php echo $expression; ?>';
        });
    }

    /**
    * Register the application services.
    *
    * @return void
    */
    public function register()
    {
    }
}
