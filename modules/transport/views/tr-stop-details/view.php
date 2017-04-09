<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\transport\models\TrStopDetails */
?>
<div class="tr-stop-details-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'route_name',
            'stop_name',
            'fare',
            'arrival_mrng',
            'arrival_evng',
        ],
    ]) ?>

</div>
