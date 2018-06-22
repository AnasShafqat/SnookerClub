<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Table;

/**
 * TableSearch represents the model behind the search form of `backend\models\Table`.
 */
class TableSearch extends Table
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['t_id', 'tt_id', 'created_by', 'updated_by'], 'integer'],
            [['t_name', 't_location', 't_purchasing_date', 't_first_repairing_date', 't_sheet_change_date', 't_description', 'created_at', 'updated_at'], 'safe'],
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
        $query = Table::find();

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
            't_id' => $this->t_id,
            'tt_id' => $this->tt_id,
            't_purchasing_date' => $this->t_purchasing_date,
            't_first_repairing_date' => $this->t_first_repairing_date,
            't_sheet_change_date' => $this->t_sheet_change_date,
            'created_at' => $this->created_at,
            'created_by' => $this->created_by,
            'updated_at' => $this->updated_at,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 't_name', $this->t_name])
            ->andFilterWhere(['like', 't_location', $this->t_location])
            ->andFilterWhere(['like', 't_description', $this->t_description]);

        return $dataProvider;
    }
}
