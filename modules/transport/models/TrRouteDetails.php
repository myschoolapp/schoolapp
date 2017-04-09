<?php

namespace app\modules\transport\models;

use Yii;

/**
 * This is the model class for table "tr_route_details".
 *
 * @property integer $id
 * @property string $route_name
 * @property string $no_of_stops
 * @property string $vehicle_id
 *
 * @property TrStopDetails[] $trStopDetails
 */
class TrRouteDetails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tr_route_details';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['route_name', 'no_of_stops', 'vehicle_id'], 'string', 'max' => 120],
            [['route_name'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'route_name' => 'Route Name',
            'no_of_stops' => 'No Of Stops',
            'vehicle_id' => 'Vehicle ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTrStopDetails()
    {
        return $this->hasMany(TrStopDetails::className(), ['route_name' => 'route_name']);
    }
}
