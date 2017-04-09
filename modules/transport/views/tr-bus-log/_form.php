<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\modules\transport\models\TrVehicleDetails;

/* @var $this yii\web\View */
/* @var $model app\modules\transport\models\TrBusLog */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tr-bus-log-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'vehicle_id')->dropDownList(ArrayHelper::map(TrVehicleDetails::find()->all(), 'vehicle_no', 'vehicle_no'),
     ['prompt' => 'Select Vehicle']) ?>

    <?= $form->field($model, 'start_time_reading')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'end_time_reading')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fuel_consumption')->textInput(['maxlength' => true]) ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
