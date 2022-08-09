<?php

declare(strict_types=1);

namespace Activity;

use Activity\Events\ModelCreated;
use Activity\Events\ModelDeleted;
use Activity\Events\ModelUpdated;
use Illuminate\Database\Eloquent\Relations\MorphMany;

trait HasActions
{
    public function initializeHasActions() : void
    {
        $this->dispatchesEvents = [
            'created' => ModelCreated::class,
            'updated' => ModelUpdated::class,
            'deleted' => ModelDeleted::class,
        ];
    }

    public function actions() :MorphMany
    {
        return $this->morphMany(Action::class, 'actionable');
    }
}