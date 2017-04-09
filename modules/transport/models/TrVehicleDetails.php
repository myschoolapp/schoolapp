<?php

namespace app\modules\transport\models;

use Yii;

/**
 * This is the model class for table "tr_vehicle_details".
 *
 * @property integer $id
 * @property string $vehicle_no
 * @property string $vehicle_code
 * @property string $no_of_seats
 * @property string $maximum_capacity
 * @property string $vehicle_type
 * @property string $address
 * @property string $city
 * @property string $state
 * @property string $phone
 * @property string $insurance
 * @property string $tax_remitted
 * @property string $permit
 * @property string $status
 * @property integer $is_deleted
 */
class TrVehicleDetails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tr_vehicle_details';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['is_deleted'], 'required'],
            [['is_deleted'], 'integer'],
            [['vehicle_no', 'vehicle_code', 'no_of_seats', 'maximum_capacity', 'vehicle_type', 'address', 'city', 'state', 'phone', 'insurance', 'tax_remitted', 'permit', 'status'], 'string', 'max' => 120]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'vehicle_no' => 'Vehicle No',
            'vehicle_code' => 'Vehicle Code',
            'no_of_seats' => 'No Of Seats',
            'maximum_capacity' => 'Maximum Capacity',
            'vehicle_type' => 'Vehicle Type',
            'address' => 'Address',
            'city' => 'City',
            'state' => 'State',
            'phone' => 'Phone',
            'insurance' => 'Insurance',
            'tax_remitted' => 'Tax Remitted',
            'permit' => 'Permit',
            'status' => 'Status',
            'is_deleted' => 'Is Deleted',
        ];
    }
}
