<?php

namespace Activity\Listeners;

class ModelCreatedListener extends ActivityListener
{
    public function __construct()
    {
        parent::__construct('created');
    }
}