<?php

namespace App\Providers;


use App\Models\Shopping_Cart;
use Illuminate\Support\Facades\Session;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function($view)
        {
            $session_name = 'shopping_cart_id';
            $Shopping_Cart_id = Session::get($session_name);
            $shopping_cart= Shopping_Cart::FindOrCreateBySessionId($Shopping_Cart_id);
            Session::put($session_name, $shopping_cart->id);
            Session::put("HOLA", "HOLA2");
            
            $view->with('shopping_cart', $shopping_cart)->with("hola", "jojo");
        });
    }
}
