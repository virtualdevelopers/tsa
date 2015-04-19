<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\VehicleImges;

/**
 * VehicleImgesSearch represents the model behind the search form about `app\models\VehicleImges`.
 */
class VehicleImgesSearch extends VehicleImges
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'vehicle_users_id', 'vehicle_id', 'car_id', 'status'], 'integer'],
            [['title', 'description', 'image'], 'safe'],
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
        $query = VehicleImges::find();

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
            'vehicle_users_id' => $this->vehicle_users_id,
            'vehicle_id' => $this->vehicle_id,
            'car_id' => $this->car_id,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'image', $this->image]);

        return $dataProvider;
    }
}
