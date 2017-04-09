<?php

namespace app\modules\transport\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\transport\models\TrStopDetails;

/**
 * TrStopDetailsSearch represents the model behind the search form about `app\modules\transport\models\TrStopDetails`.
 */
class TrStopDetailsSearch extends TrStopDetails
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['route_name', 'stop_name', 'fare', 'arrival_mrng', 'arrival_evng'], 'safe'],
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
        $query = TrStopDetails::find();

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
            'arrival_mrng' => $this->arrival_mrng,
            'arrival_evng' => $this->arrival_evng,
        ]);

        $query->andFilterWhere(['like', 'route_name', $this->route_name])
            ->andFilterWhere(['like', 'stop_name', $this->stop_name])
            ->andFilterWhere(['like', 'fare', $this->fare]);

        return $dataProvider;
    }
}
