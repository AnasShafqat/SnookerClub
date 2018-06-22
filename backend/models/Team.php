<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "team".
 *
 * @property int $team_id
 * @property string $team_name
 * @property string $team_captain_name
 * @property string $no_of_players
 * @property string $created_at
 * @property int $created_by
 * @property string $updated_at
 * @property int $updated_by
 *
 * @property Table[] $tables
 */
class Team extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'team';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['team_name', 'team_captain_name', 'no_of_players', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'required'],
            [['no_of_players'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['created_by', 'updated_by'], 'integer'],
            [['team_name', 'team_captain_name'], 'string', 'max' => 64],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'team_id' => Yii::t('app', 'Team ID'),
            'team_name' => Yii::t('app', 'Team Name'),
            'team_captain_name' => Yii::t('app', 'Team Captain Name'),
            'no_of_players' => Yii::t('app', 'No Of Players'),
            'created_at' => Yii::t('app', 'Created At'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'updated_by' => Yii::t('app', 'Updated By'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTables()
    {
        return $this->hasMany(Table::className(), ['team_id' => 'team_id']);
    }
}
