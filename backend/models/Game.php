<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "game".
 *
 * @property int $g_id
 * @property int $gt_id
 * @property string $g_start_datetime
 * @property string $g_end_datetime
 * @property string $player1_name
 * @property int $player2_name
 * @property int $product_id
 * @property int $product_qty
 * @property double $product_t_price
 * @property string $created_at
 * @property int $created_by
 * @property string $updated_at
 * @property int $updated_by
 *
 * @property GameType $gt
 */
class Game extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'game';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['gt_id', 'g_start_datetime', 'g_end_datetime', 'player1_name', 'player2_name', 'product_id', 'product_qty', 'product_t_price', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'required'],
            [['gt_id', 'player2_name', 'product_id', 'product_qty', 'created_by', 'updated_by'], 'integer'],
            [['g_start_datetime', 'g_end_datetime', 'created_at', 'updated_at'], 'safe'],
            [['product_t_price'], 'number'],
            [['player1_name'], 'string', 'max' => 64],
            [['gt_id'], 'exist', 'skipOnError' => true, 'targetClass' => GameType::className(), 'targetAttribute' => ['gt_id' => 'gt_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'g_id' => Yii::t('app', 'G ID'),
            'gt_id' => Yii::t('app', 'Gt ID'),
            'g_start_datetime' => Yii::t('app', 'G Start Datetime'),
            'g_end_datetime' => Yii::t('app', 'G End Datetime'),
            'player1_name' => Yii::t('app', 'Player1 Name'),
            'player2_name' => Yii::t('app', 'Player2 Name'),
            'product_id' => Yii::t('app', 'Product ID'),
            'product_qty' => Yii::t('app', 'Product Qty'),
            'product_t_price' => Yii::t('app', 'Product T Price'),
            'created_at' => Yii::t('app', 'Created At'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'updated_by' => Yii::t('app', 'Updated By'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGt()
    {
        return $this->hasOne(GameType::className(), ['gt_id' => 'gt_id']);
    }
}
