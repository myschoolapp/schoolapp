<?php

namespace app\modules\transport\models;

use Yii;

/**
 * This is the model class for table "tr_driver_details".
 *
 * @property integer $id
 * @property string $vehicle_id
 * @property string $first_name
 * @property string $last_name
 * @property string $address
 * @property string $dob
 * @property string $age
 * @property string $license_no
 * @property string $expiry_date
 * @property string $status
 * @property integer $mobile_no
 */
class TrDriverDetails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tr_driver_details';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['expiry_date'], 'safe'],
            [['mobile_no'], 'required'],
            [['mobile_no'], 'integer'],
            [['vehicle_id', 'first_name', 'last_name', 'address', 'dob', 'age', 'license_no', 'status'], 'string', 'max' => 120]
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
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'address' => 'Address',
            'dob' => 'Dob',
            'age' => 'Age',
            'license_no' => 'License No',
            'expiry_date' => 'Expiry Date',
            'status' => 'Status',
            'mobile_no' => 'Mobile No',
        ];
    }
}
