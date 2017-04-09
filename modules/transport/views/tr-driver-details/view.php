<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\transport\models\TrDriverDetails */
?>
<div class="tr-driver-details-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'vehicle_id',
            'first_name',
            'last_name',
            'address',
            'dob',
            'age',
            'license_no',
            'expiry_date',
            'status',
            'mobile_no',
        ],
    ]) ?>

</div>
