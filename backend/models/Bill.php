<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "bill".
 *
 * @property int $bill_id
 * @property int $player_id
 * @property int $table_id
 * @property string $bill_datetime
 * @property string $created_at
 * @property int $created_by
 * @property string $updated_at
 * @property int $updated_by
 *
 * @property Player $player
 * @property Table $table
 */
class Bill extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bill';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['player_id', 'table_id', 'bill_datetime', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'required'],
            [['player_id', 'table_id', 'created_by', 'updated_by'], 'integer'],
            [['bill_datetime', 'created_at', 'updated_at'], 'safe'],
            [['player_id'], 'exist', 'skipOnError' => true, 'targetClass' => Player::className(), 'targetAttribute' => ['player_id' => 'p_id']],
            [['table_id'], 'exist', 'skipOnError' => true, 'targetClass' => Table::className(), 'targetAttribute' => ['table_id' => 't_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'bill_id' => Yii::t('app', 'Bill ID'),
            'player_id' => Yii::t('app', 'Player ID'),
            'table_id' => Yii::t('app', 'Table ID'),
            'bill_datetime' => Yii::t('app', 'Bill Datetime'),
            'created_at' => Yii::t('app', 'Created At'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'updated_by' => Yii::t('app', 'Updated By'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlayer()
    {
        return $this->hasOne(Player::className(), ['p_id' => 'player_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTable()
    {
        return $this->hasOne(Table::className(), ['t_id' => 'table_id']);
    }
}
