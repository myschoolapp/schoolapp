<?php

namespace app\modules\transport\models;

use Yii;

/**
 * This is the model class for table "tr_bus_log".
 *
 * @property integer $id
 * @property string $vehicle_id
 * @property string $start_time_reading
 * @property string $end_time_reading
 * @property string $fuel_consumption
 */
class TrBusLog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tr_bus_log';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vehicle_id', 'start_time_reading', 'end_time_reading', 'fuel_consumption'], 'string', 'max' => 120]
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
            'start_time_reading' => 'Start Time Reading',
            'end_time_reading' => 'End Time Reading',
            'fuel_consumption' => 'Fuel Consumption',
        ];
    }
}
