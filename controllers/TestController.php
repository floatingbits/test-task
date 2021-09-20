<?php

namespace app\controllers;

use app\events\TestTaskEvent;
use app\models\TestTaskForm;
use Yii;
use yii\web\Controller;

class TestController extends Controller
{

    /**
     * Displays test task.
     *
     * @return string
     */
    public function actionYoursTrulyTestTask()
    {

        $model = new TestTaskForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

            $testTaskEvent = new TestTaskEvent();
            $testTaskEvent->setModel($model);
            Yii::$app->trigger(TestTaskForm::TEST_TASK_SENT, $testTaskEvent);

            return $this->render('yours-truly-test-task-result', ['resultString' => $testTaskEvent->getResult()]);
        } else {

            return $this->render('yours-truly-test-task', ['model' => $model]);
        }
    }

}