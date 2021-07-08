<?php

namespace App\Providers;

use App\Events\VideoViewr;
use App\Listeners\IncraseCount;
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
        'App\Events\NewComment' => [
            'App\Listeners\CommentListener'
        ],

        'App\Events\AcceptTender' => [
            'App\Listeners\AcceptTenderListener'
        ],
        VideoViewr::class => [
            IncraseCount::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
