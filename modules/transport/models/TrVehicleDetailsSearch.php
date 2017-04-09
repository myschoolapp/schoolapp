<?php

namespace app\modules\transport\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\transport\models\TrVehicleDetails;

/**
 * TrVehicleDetailsSearch represents the model behind the search form about `app\modules\transport\models\TrVehicleDetails`.
 */
class TrVehicleDetailsSearch extends TrVehicleDetails
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'is_deleted'], 'integer'],
            [['vehicle_no', 'vehicle_code', 'no_of_seats', 'maximum_capacity', 'vehicle_type', 'address', 'city', 'state', 'phone', 'insurance', 'tax_remitted', 'permit', 'status'], 'safe'],
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
        $query = TrVehicleDetails::find();

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
            'is_deleted' => $this->is_deleted,
        ]);

        $query->andFilterWhere(['like', 'vehicle_no', $this->vehicle_no])
            ->andFilterWhere(['like', 'vehicle_code', $this->vehicle_code])
            ->andFilterWhere(['like', 'no_of_seats', $this->no_of_seats])
            ->andFilterWhere(['like', 'maximum_capacity', $this->maximum_capacity])
            ->andFilterWhere(['like', 'vehicle_type', $this->vehicle_type])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'state', $this->state])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'insurance', $this->insurance])
            ->andFilterWhere(['like', 'tax_remitted', $this->tax_remitted])
            ->andFilterWhere(['like', 'permit', $this->permit])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
