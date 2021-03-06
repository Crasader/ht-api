<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\SendSMS' => [
            'App\Listeners\SendSMSNotification',
        ],
        'App\Events\SendTplMsg' => [
            'App\Listeners\SendTplMsgNotification',
        ],
        'App\Events\SendNotification' => [
            'App\Listeners\SendNotificationListener',
        ],
        'App\Events\CreditOrderFriend' => [
            'App\Listeners\CreditOrderFriendListener',
        ],

        'App\Events\Upgrade' => [
            'App\Listeners\UpgradeListener',
        ],

        'App\Events\OrderCommission' => [
            'App\Listeners\OrderCommissionListener',
        ],
    ];

    /**
     * 事件订阅.
     * @var array
     */
    protected $subscribe = [
        'App\Listeners\CreditEventSubscriber',
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
