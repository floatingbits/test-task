<?php

namespace app\handlers;

use app\controllers\TestController;
use app\events\TestTaskEvent;
use yii\base\Component;

class TestTaskExtendedHandler extends Component
{

    /**
     * Extended business logic for our test task
     * @param TestTaskEvent $event
     */
    public function handleTestTaskEvent(TestTaskEvent $event) {
        $event->setResult($event->getResult() . ' ... look at the extension!');
    }

}