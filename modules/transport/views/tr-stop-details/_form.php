<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\transport\models\TrStopDetails */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tr-stop-details-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'route_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stop_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fare')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'arrival_mrng')->textInput() ?>

    <?= $form->field($model, 'arrival_evng')->textInput() ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
