<?php

namespace Activity\Listeners;

class ModelDeletedListener extends ActivityListener
{
    public function __construct()
    {
        parent::__construct('deleted');
    }
}