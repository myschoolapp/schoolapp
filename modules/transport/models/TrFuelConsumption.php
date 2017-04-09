<?php

namespace app\modules\transport\models;

use Yii;

/**
 * This is the model class for table "tr_fuel_consumption".
 *
 * @property integer $id
 * @property string $vehicle_id
 * @property string $fuel_consumed
 * @property string $amount
 * @property string $consumed_date
 */
class TrFuelConsumption extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tr_fuel_consumption';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['consumed_date'], 'safe'],
            [['vehicle_id', 'fuel_consumed', 'amount'], 'string', 'max' => 120]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'vehicle_id' => 'Vehicle ID',
            'fuel_consumed' => 'Fuel Consumed',
            'amount' => 'Amount',
            'consumed_date' => 'Consumed Date',
        ];
    }
}
