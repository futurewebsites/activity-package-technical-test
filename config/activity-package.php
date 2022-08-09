<?php

return [
    # users model class
    'user_model' => 'App\Models\Users',

    # exclude models from user activity logging
    'excluded_models' => [],

    'events_to_log' => [
        'created' => true,
        'updated' => true,
        'deleted' => true,
        'retrieved' => false,
        'creating' => false,
        'updating' => false,
        'saving' => false,
        'saved' => false,
        'deleting' => false,
        'trashed' => false,
        'forceDeleted' => false,
        'restoring' => false,
        'restored' => false,
        'replicating' => false
    ]

];