<?php

namespace app\controllers;

use app\events\TestTaskEvent;
use app\models\TestTaskForm;
use Yii;
use yii\web\Controller;

/**
 * Controller for the handling of my test task page
 */
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
            //Validated correctly
            $testTaskEvent = new TestTaskEvent();
            $testTaskEvent->setModel($model);
            Yii::$app->trigger(TestTaskForm::TEST_TASK_SENT, $testTaskEvent);

            return $this->render('yours-truly-test-task-result', ['resultString' => $testTaskEvent->getResult()]);
        } else {
            //GET request or bad validation
            return $this->render('yours-truly-test-task', ['model' => $model]);
        }
    }

}