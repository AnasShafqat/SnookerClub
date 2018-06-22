<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Game;

/**
 * GameSearch represents the model behind the search form of `backend\models\Game`.
 */
class GameSearch extends Game
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['g_id', 'gt_id', 'player2_name', 'product_id', 'product_qty', 'created_by', 'updated_by'], 'integer'],
            [['g_start_datetime', 'g_end_datetime', 'player1_name', 'created_at', 'updated_at'], 'safe'],
            [['product_t_price'], 'number'],
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
        $query = Game::find();

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
            'g_id' => $this->g_id,
            'gt_id' => $this->gt_id,
            'g_start_datetime' => $this->g_start_datetime,
            'g_end_datetime' => $this->g_end_datetime,
            'player2_name' => $this->player2_name,
            'product_id' => $this->product_id,
            'product_qty' => $this->product_qty,
            'product_t_price' => $this->product_t_price,
            'created_at' => $this->created_at,
            'created_by' => $this->created_by,
            'updated_at' => $this->updated_at,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'player1_name', $this->player1_name]);

        return $dataProvider;
    }
}
