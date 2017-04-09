<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\modules\transport\models\TrStudentStopPoints $model
 */

$this->title = 'Tr Student Stop Points ' . $model->id . ', ' . 'Edit';
$this->params['breadcrumbs'][] = ['label' => 'Tr Student Stop Points', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Edit';
?>
<div class="giiant-crud tr-student-stop-points-update">

    <h1>
        <?= 'Tr Student Stop Points' ?>        <small>
                        <?= $model->id ?>        </small>
    </h1>

    <div class="crud-navigation">
        <?= Html::a('<span class="glyphicon glyphicon-eye-open"></span> ' . 'View', ['view', 'id' => $model->id], ['class' => 'btn btn-default']) ?>
    </div>

	<?php echo $this->render('_form', [
		'model' => $model,
	]); ?>

</div>
