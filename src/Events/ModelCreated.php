<?php

namespace Activity\Events;

use Illuminate\Database\Eloquent\Model;

class ModelCreated
{

    public function __construct (public Model $model){}
}