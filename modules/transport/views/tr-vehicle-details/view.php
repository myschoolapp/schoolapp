<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\transport\models\TrVehicleDetails */
?>
<div class="tr-vehicle-details-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'vehicle_no',
            'vehicle_code',
            'no_of_seats',
            'maximum_capacity',
            'vehicle_type',
            'address',
            'city',
            'state',
            'phone',
            'insurance',
            'tax_remitted',
            'permit',
            'status',
            'is_deleted',
        ],
    ]) ?>

</div>
