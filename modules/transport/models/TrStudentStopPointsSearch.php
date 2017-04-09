<?php

namespace app\modules\transport\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\transport\models\TrStudentStopPoints;

/**
* TrStudentStopPointsSearch represents the model behind the search form about `app\modules\transport\models\TrStudentStopPoints`.
*/
class TrStudentStopPointsSearch extends TrStudentStopPoints
{
/**
* @inheritdoc
*/
public function rules()
{
return [
[['id', 'driver_phone'], 'integer'],
            [['student_id', 'stop_name', 'route_name', 'vehicle_no', 'driver_id'], 'safe'],
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
$query = TrStudentStopPoints::find();

$dataProvider = new ActiveDataProvider([
'query' => $query,
]);

$this->load($params);

if (!$this->validate()) {
// uncomment the following line if you do not want to any records when validation fails
// $query->where('0=1');
return $dataProvider;
}

$query->andFilterWhere([
            'id' => $this->id,
            'driver_phone' => $this->driver_phone,
        ]);

        $query->andFilterWhere(['like', 'student_id', $this->student_id])
            ->andFilterWhere(['like', 'stop_name', $this->stop_name])
            ->andFilterWhere(['like', 'route_name', $this->route_name])
            ->andFilterWhere(['like', 'vehicle_no', $this->vehicle_no])
            ->andFilterWhere(['like', 'driver_id', $this->driver_id]);

return $dataProvider;
}
}