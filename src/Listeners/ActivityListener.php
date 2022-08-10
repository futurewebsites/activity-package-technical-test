<?php

namespace Activity\Listeners;

use Activity\Action;

class ActivityListener
{

    protected string $activityName;
    protected object $event;

    public function __construct (string $activityName = '')
    {
        $this->activityName = $activityName;
    }

    public function handle (object $event): void
    {
        $this->event = $event;
        $this->storeActivity();
    }

    protected function storeActivity (): void
    {
        if (! $this->canRecordActivity() || ! $this->canRecordModel()) {
            return;
        }

        Action::create([
            'action' => "The model was {$this->activityName}",
            'actionable_type' => get_class($this->event->model),
            'actionable_id' => $this->event->model->getKey(),
            'user_id' => auth()?->user()?->id
        ]);
    }

    public function canRecordActivity () : bool
    {
        return config("activity-package.events_to_log.{$this->activityName}", false);
    }

    public function canRecordModel () : bool
    {
        return ! in_array(
            get_class($this->event->model),
            config("activity-package.excluded_models", true)
        );
    }

}