<?php

namespace app\modules\transport\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\transport\models\TrFuelConsumption;

/**
 * TrFuelConsumptionSearch represents the model behind the search form about `app\modules\transport\models\TrFuelConsumption`.
 */
class TrFuelConsumptionSearch extends TrFuelConsumption
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['vehicle_id', 'fuel_consumed', 'amount', 'consumed_date'], 'safe'],
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
        $query = TrFuelConsumption::find();

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
            'consumed_date' => $this->consumed_date,
        ]);

        $query->andFilterWhere(['like', 'vehicle_id', $this->vehicle_id])
            ->andFilterWhere(['like', 'fuel_consumed', $this->fuel_consumed])
            ->andFilterWhere(['like', 'amount', $this->amount]);

        return $dataProvider;
    }
}
