<?php namespace benancetin\datetime;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Carbon\Carbon;

class DateTimeServiceProvider extends ServiceProvider
{
    /**
    * Bootstrap the application services.
    *
    * @return void
    */
    public function boot()
    {
        Blade::directive('datetime', function ($exp) {
            $string =  Carbon::now($exp)->toDateTimeString();
             return '<?php echo "'.$string.'"; ?>';
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
