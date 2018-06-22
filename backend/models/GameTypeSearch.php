<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\GameType;

/**
 * GameTypeSearch represents the model behind the search form of `backend\models\GameType`.
 */
class GameTypeSearch extends GameType
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['gt_id', 'created_by', 'updated_by'], 'integer'],
            [['gt_name', 'gt_description', 'created_at', 'updated_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = GameType::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'gt_id' => $this->gt_id,
            'created_at' => $this->created_at,
            'created_by' => $this->created_by,
            'updated_at' => $this->updated_at,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'gt_name', $this->gt_name])
            ->andFilterWhere(['like', 'gt_description', $this->gt_description]);

        return $dataProvider;
    }
}
