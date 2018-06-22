<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "game_type".
 *
 * @property int $gt_id
 * @property string $gt_name
 * @property string $gt_description
 * @property string $created_at
 * @property int $created_by
 * @property string $updated_at
 * @property int $updated_by
 *
 * @property Game[] $games
 */
class GameType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'game_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['gt_name', 'gt_description', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['created_by', 'updated_by'], 'integer'],
            [['gt_name'], 'string', 'max' => 64],
            [['gt_description'], 'string', 'max' => 120],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'gt_id' => Yii::t('app', 'Gt ID'),
            'gt_name' => Yii::t('app', 'Gt Name'),
            'gt_description' => Yii::t('app', 'Gt Description'),
            'created_at' => Yii::t('app', 'Created At'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'updated_by' => Yii::t('app', 'Updated By'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGames()
    {
        return $this->hasMany(Game::className(), ['gt_id' => 'gt_id']);
    }
}
