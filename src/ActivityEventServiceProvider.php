<?php

namespace Activity;

use Activity\Events\ModelCreated;
use Activity\Events\ModelDeleted;
use Activity\Events\ModelUpdated;
use Activity\Listeners\ModelCreatedListener;
use Activity\Listeners\ModelDeletedListener;
use Activity\Listeners\ModelUpdatedListener;
use Illuminate\Foundation\Support\Providers\EventServiceProvider;

class ActivityEventServiceProvider extends EventServiceProvider
{
    public $listen = [
        ModelCreated::class => [ModelCreatedListener::class],
        ModelUpdated::class => [ModelUpdatedListener::class],
        ModelDeleted::class => [ModelDeletedListener::class],
    ];

    public function boot(){
        Parent::boot();
    }
}