<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\transport\models\TrBusLog */
?>
<div class="tr-bus-log-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'vehicle_id',
            'start_time_reading',
            'end_time_reading',
            'fuel_consumption',
        ],
    ]) ?>

</div>
