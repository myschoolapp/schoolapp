<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\transport\models\TrDriverDetails */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tr-driver-details-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'vehicle_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dob')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'age')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'license_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'expiry_date')->textInput() ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mobile_no')->textInput() ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
