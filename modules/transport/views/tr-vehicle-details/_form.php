<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\transport\models\TrVehicleDetails */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tr-vehicle-details-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'vehicle_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vehicle_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_of_seats')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'maximum_capacity')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vehicle_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'state')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'insurance')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tax_remitted')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'permit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'is_deleted')->textInput() ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
