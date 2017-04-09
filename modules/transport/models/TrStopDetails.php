<?php

namespace app\modules\transport\models;

use Yii;

/**
 * This is the model class for table "tr_stop_details".
 *
 * @property integer $id
 * @property string $route_name
 * @property string $stop_name
 * @property string $fare
 * @property string $arrival_mrng
 * @property string $arrival_evng
 *
 * @property TrRouteDetails $routeName
 */
class TrStopDetails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tr_stop_details';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['arrival_mrng', 'arrival_evng'], 'safe'],
            [['route_name'], 'string', 'max' => 255],
            [['stop_name', 'fare'], 'string', 'max' => 120]
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
            'stop_name' => 'Stop Name',
            'fare' => 'Fare',
            'arrival_mrng' => 'Arrival Mrng',
            'arrival_evng' => 'Arrival Evng',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRouteName()
    {
        return $this->hasOne(TrRouteDetails::className(), ['route_name' => 'route_name']);
    }
}
