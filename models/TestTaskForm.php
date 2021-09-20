<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * TestTaskForm is the model behind the Test Task form: Display the name n times, according to $numberOfRepetitions
 */
class TestTaskForm extends Model
{
    const TEST_TASK_SENT = 'test-task-sent';
    /** @var string */
    public $name;
    /** @var int */
    public $numberOfRepetitions;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, numberOfRepetitions are required
            [['name', 'numberOfRepetitions'], 'required'],
            // numberOfRepetitions has to be an integer
            ['numberOfRepetitions', 'number', 'integerOnly' => true]
        ];
    }


}
