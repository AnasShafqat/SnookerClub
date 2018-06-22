<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TableType;

/**
 * TableTypeSearch represents the model behind the search form of `backend\models\TableType`.
 */
class TableTypeSearch extends TableType
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tt_id', 'created_by', 'updated_by'], 'integer'],
            [['tt_name', 'tt_specification', 'created_at', 'updated_at'], 'safe'],
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
        $query = TableType::find();

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
            'tt_id' => $this->tt_id,
            'created_at' => $this->created_at,
            'created_by' => $this->created_by,
            'updated_at' => $this->updated_at,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'tt_name', $this->tt_name])
            ->andFilterWhere(['like', 'tt_specification', $this->tt_specification]);

        return $dataProvider;
    }
}
