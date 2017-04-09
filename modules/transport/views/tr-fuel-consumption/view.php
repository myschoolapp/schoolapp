<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\transport\models\TrFuelConsumption */
?>
<div class="tr-fuel-consumption-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'vehicle_id',
            'fuel_consumed',
            'amount',
            'consumed_date',
        ],
    ]) ?>

</div>
