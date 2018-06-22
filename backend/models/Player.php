<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "player".
 *
 * @property int $p_id
 * @property string $p_name
 * @property string $p_cnic
 * @property string $p_age
 * @property string $created_at
 * @property int $created_by
 * @property string $updated_at
 * @property int $updated_by
 *
 * @property Bill[] $bills
 */
class Player extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'player';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['p_name', 'p_cnic', 'p_age', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'required'],
            [['p_age'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['created_by', 'updated_by'], 'integer'],
            [['p_name'], 'string', 'max' => 64],
            [['p_cnic'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'p_id' => Yii::t('app', 'P ID'),
            'p_name' => Yii::t('app', 'P Name'),
            'p_cnic' => Yii::t('app', 'P Cnic'),
            'p_age' => Yii::t('app', 'P Age'),
            'created_at' => Yii::t('app', 'Created At'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'updated_by' => Yii::t('app', 'Updated By'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBills()
    {
        return $this->hasMany(Bill::className(), ['player_id' => 'p_id']);
    }
}
