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
        Blade::directive('showdatetime', function ($expression) {
            $string =  Carbon::now($expression)->toDateTimeString();
            return '<?php echo "<div>'.$string.'</div>"; ?>';
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
