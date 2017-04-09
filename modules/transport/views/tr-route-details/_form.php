<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\transport\models\TrRouteDetails */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tr-route-details-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'route_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_of_stops')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vehicle_id')->textInput(['maxlength' => true]) ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
