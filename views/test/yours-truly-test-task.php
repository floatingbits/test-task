<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<h1>Test Task Form</h1>
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'name') ?>

<?= $form->field($model, 'numberOfRepetitions') ?>

<div class="form-group">
    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>

