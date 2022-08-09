<?php

declare(strict_types=1);

namespace Activity;

use Activity\Tests\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Action extends Model
{

    protected $guarded = [];

    public function user (): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function actionable (): MorphTo
    {
        return $this->morphTo();
    }

    public function getDescription (): string
    {
        return __($this->action);
    }

}