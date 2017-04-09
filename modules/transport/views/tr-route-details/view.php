<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\transport\models\TrRouteDetails */
?>
<div class="tr-route-details-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'route_name',
            'no_of_stops',
            'vehicle_id',
        ],
    ]) ?>

</div>
