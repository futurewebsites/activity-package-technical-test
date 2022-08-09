<?php

namespace Activity\Listeners;

class ModelUpdatedListener extends ActivityListener
{
    public function __construct()
    {
        parent::__construct('updated');
    }
}