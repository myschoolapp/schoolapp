<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var app\modules\transport\models\TrStudentStopPoints $model
*/

$this->title = 'Create';
$this->params['breadcrumbs'][] = ['label' => 'Tr Student Stop Points', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giiant-crud tr-student-stop-points-create">

    <h1>
        <?= 'Tr Student Stop Points' ?>        <small>
                        <?= $model->id ?>        </small>
    </h1>

    <div class="clearfix crud-navigation">
        <div class="pull-left">
            <?=             Html::a(
            'Cancel',
            \yii\helpers\Url::previous(),
            ['class' => 'btn btn-default']) ?>
        </div>
    </div>

    <?= $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
