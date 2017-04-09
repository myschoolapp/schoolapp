<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\transport\models\TrFuelConsumption */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tr-fuel-consumption-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'vehicle_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fuel_consumed')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'consumed_date')->textInput() ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
