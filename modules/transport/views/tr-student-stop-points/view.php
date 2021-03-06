<?php

use dmstr\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\widgets\DetailView;
use yii\widgets\Pjax;
use dmstr\bootstrap\Tabs;

/**
* @var yii\web\View $this
* @var app\modules\transport\models\TrStudentStopPoints $model
*/
$copyParams = $model->attributes;

$this->title = 'Tr Student Stop Points ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tr Student Stop Points', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'View';
?>
<div class="giiant-crud tr-student-stop-points-view">

    <!-- flash message -->
    <?php if (\Yii::$app->session->getFlash('deleteError') !== null) : ?>
        <span class="alert alert-info alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <?= \Yii::$app->session->getFlash('deleteError') ?>
        </span>
    <?php endif; ?>

    <h1>
        <?= 'Tr Student Stop Points' ?>        <small>
            <?= $model->id ?>        </small>
    </h1>



    <div class="clearfix crud-navigation">
        <!-- menu buttons -->
        <div class='pull-left'>
            <?= Html::a('<span class="glyphicon glyphicon-pencil"></span> ' . 'Edit', ['update', 'id' => $model->id],['class' => 'btn btn-info']) ?>
            <?= Html::a('<span class="glyphicon glyphicon-copy"></span> ' . 'Copy', ['create', 'id' => $model->id, 'TrStudentStopPoints'=>$copyParams],['class' => 'btn btn-success']) ?>
            <?= Html::a('<span class="glyphicon glyphicon-plus"></span> ' . 'New', ['create'], ['class' => 'btn btn-success']) ?>
        </div>
        <div class="pull-right">
            <?= Html::a('<span class="glyphicon glyphicon-list"></span> ' . 'List TrStudentStopPoints', ['index'], ['class'=>'btn btn-default']) ?>
        </div>

    </div>


    <?php $this->beginBlock('app\modules\transport\models\TrStudentStopPoints'); ?>

    
    <?= DetailView::widget([
    'model' => $model,
    'attributes' => [
            'id',
// generated by schmunk42\giiant\generators\crud\providers\RelationProvider::attributeFormat
[
    'format' => 'html',
    'attribute' => 'student_id',
    'value' => ($model->getStudent()->one() ? Html::a($model->getStudent()->one()->name, ['students/view', 'id' => $model->getStudent()->one()->id,]) : '<span class="label label-warning">?</span>'),
],
// generated by schmunk42\giiant\generators\crud\providers\RelationProvider::attributeFormat
[
    'format' => 'html',
    'attribute' => 'stop_name',
    'value' => ($model->getStopName()->one() ? Html::a($model->getStopName()->one()->id, ['tr-stop-details/view', 'id' => $model->getStopName()->one()->id,]) : '<span class="label label-warning">?</span>'),
],
// generated by schmunk42\giiant\generators\crud\providers\RelationProvider::attributeFormat
[
    'format' => 'html',
    'attribute' => 'route_name',
    'value' => ($model->getRouteName()->one() ? Html::a($model->getRouteName()->one()->id, ['tr-route-details/view', 'id' => $model->getRouteName()->one()->id,]) : '<span class="label label-warning">?</span>'),
],
// generated by schmunk42\giiant\generators\crud\providers\RelationProvider::attributeFormat
[
    'format' => 'html',
    'attribute' => 'vehicle_no',
    'value' => ($model->getVehicleNo()->one() ? Html::a($model->getVehicleNo()->one()->id, ['tr-vehicle-details/view', 'id' => $model->getVehicleNo()->one()->id,]) : '<span class="label label-warning">?</span>'),
],
        'driver_id',
        'driver_phone',
    ],
    ]); ?>

    
    <hr/>

    <?= Html::a('<span class="glyphicon glyphicon-trash"></span> ' . 'Delete', ['delete', 'id' => $model->id],
    [
    'class' => 'btn btn-danger',
    'data-confirm' => '' . 'Are you sure to delete this item?' . '',
    'data-method' => 'post',
    ]); ?>
    <?php $this->endBlock(); ?>


    
    <?= Tabs::widget(
                 [
                     'id' => 'relation-tabs',
                     'encodeLabels' => false,
                     'items' => [ [
    'label'   => '<b class=""># '.$model->id.'</b>',
    'content' => $this->blocks['app\modules\transport\models\TrStudentStopPoints'],
    'active'  => true,
], ]
                 ]
    );
    ?>
</div>
