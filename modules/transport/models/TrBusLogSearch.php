<?php

namespace app\modules\transport\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\transport\models\TrBusLog;

/**
 * TrBusLogSearch represents the model behind the search form about `app\modules\transport\models\TrBusLog`.
 */
class TrBusLogSearch extends TrBusLog
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['vehicle_id', 'start_time_reading', 'end_time_reading', 'fuel_consumption'], 'safe'],
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
        $query = TrBusLog::find();

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
        ]);

        $query->andFilterWhere(['like', 'vehicle_id', $this->vehicle_id])
            ->andFilterWhere(['like', 'start_time_reading', $this->start_time_reading])
            ->andFilterWhere(['like', 'end_time_reading', $this->end_time_reading])
            ->andFilterWhere(['like', 'fuel_consumption', $this->fuel_consumption]);

        return $dataProvider;
    }
}
