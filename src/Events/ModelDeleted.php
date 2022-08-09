<?php

namespace Activity\Events;

use Illuminate\Database\Eloquent\Model;

class ModelDeleted
{
    public function __construct(public Model $model){}

}