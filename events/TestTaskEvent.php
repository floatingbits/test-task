<?php

namespace app\events;

use app\models\TestTaskForm;
use yii\base\Event;

class TestTaskEvent extends Event
{
    const EVENT_TEST_TASK_FORM_SENT = 'testTaskFormSent';
    /** @var TestTaskForm */
    private $model;
    /** @var String */
    private $result;

    /**
     * @return TestTaskForm
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param TestTaskForm $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * @return String
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param String $result
     */
    public function setResult($result)
    {
        $this->result = $result;
    }

}