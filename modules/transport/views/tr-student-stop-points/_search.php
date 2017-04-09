<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
* @var yii\web\View $this
* @var app\modules\transport\models\TrStudentStopPointsSearch $model
* @var yii\widgets\ActiveForm $form
*/
?>

<div class="tr-student-stop-points-search">

    <?php $form = ActiveForm::begin([
    'action' => ['index'],
    'method' => 'get',
    ]); ?>

    		<?= $form->field($model, 'id') ?>

		<?= $form->field($model, 'student_id') ?>

		<?= $form->field($model, 'stop_name') ?>

		<?= $form->field($model, 'route_name') ?>

		<?= $form->field($model, 'vehicle_no') ?>

		<?php // echo $form->field($model, 'driver_id') ?>

		<?php // echo $form->field($model, 'driver_phone') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
