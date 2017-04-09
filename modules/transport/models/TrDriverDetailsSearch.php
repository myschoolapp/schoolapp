<?php

namespace app\modules\transport\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\transport\models\TrDriverDetails;

/**
 * TrDriverDetailsSearch represents the model behind the search form about `app\modules\transport\models\TrDriverDetails`.
 */
class TrDriverDetailsSearch extends TrDriverDetails
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'mobile_no'], 'integer'],
            [['vehicle_id', 'first_name', 'last_name', 'address', 'dob', 'age', 'license_no', 'expiry_date', 'status'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = TrDriverDetails::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'expiry_date' => $this->expiry_date,
            'mobile_no' => $this->mobile_no,
        ]);

        $query->andFilterWhere(['like', 'vehicle_id', $this->vehicle_id])
            ->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'dob', $this->dob])
            ->andFilterWhere(['like', 'age', $this->age])
            ->andFilterWhere(['like', 'license_no', $this->license_no])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
