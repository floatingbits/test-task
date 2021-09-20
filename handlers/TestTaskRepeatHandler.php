<?php

namespace app\handlers;

use app\controllers\TestController;
use app\events\TestTaskEvent;
use yii\base\Component;

class TestTaskRepeatHandler extends Component
{

    /**
     * Business logic for our test task
     * @param TestTaskEvent $event
     */
    public function handleTestTaskEvent(TestTaskEvent $event) {
        $event->setResult('Hello ' . implode(' Hello ', array_fill(0, $event->getModel()->numberOfRepetitions, $event->getModel()->name)));
    }

}