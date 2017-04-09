<?php

namespace app\modules\transport\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\transport\models\TrRouteDetails;

/**
 * TrRouteDetailsSearch represents the model behind the search form about `app\modules\transport\models\TrRouteDetails`.
 */
class TrRouteDetailsSearch extends TrRouteDetails
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['route_name', 'no_of_stops', 'vehicle_id'], 'safe'],
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
        $query = TrRouteDetails::find();

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

        $query->andFilterWhere(['like', 'route_name', $this->route_name])
            ->andFilterWhere(['like', 'no_of_stops', $this->no_of_stops])
            ->andFilterWhere(['like', 'vehicle_id', $this->vehicle_id]);

        return $dataProvider;
    }
}
