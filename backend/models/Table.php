<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "table".
 *
 * @property int $t_id
 * @property int $tt_id
 * @property string $t_name
 * @property string $t_location
 * @property string $t_purchasing_date
 * @property string $t_first_repairing_date
 * @property string $t_sheet_change_date
 * @property string $t_description
 * @property string $created_at
 * @property int $created_by
 * @property string $updated_at
 * @property int $updated_by
 *
 * @property Bill[] $bills
 * @property Game[] $games
 * @property TableType $tt
 */
class Table extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'table';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tt_id', 't_name', 't_location', 't_purchasing_date', 't_first_repairing_date', 't_sheet_change_date', 't_description', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'required'],
            [['tt_id', 'created_by', 'updated_by'], 'integer'],
            [['t_purchasing_date', 't_first_repairing_date', 't_sheet_change_date', 'created_at', 'updated_at'], 'safe'],
            [['t_name'], 'string', 'max' => 32],
            [['t_location'], 'string', 'max' => 64],
            [['t_description'], 'string', 'max' => 120],
            [['tt_id'], 'exist', 'skipOnError' => true, 'targetClass' => TableType::className(), 'targetAttribute' => ['tt_id' => 'tt_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            't_id' => Yii::t('app', 'T ID'),
            'tt_id' => Yii::t('app', 'Tt ID'),
            't_name' => Yii::t('app', 'T Name'),
            't_location' => Yii::t('app', 'T Location'),
            't_purchasing_date' => Yii::t('app', 'T Purchasing Date'),
            't_first_repairing_date' => Yii::t('app', 'T First Repairing Date'),
            't_sheet_change_date' => Yii::t('app', 'T Sheet Change Date'),
            't_description' => Yii::t('app', 'T Description'),
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
        return $this->hasMany(Bill::className(), ['table_id' => 't_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGames()
    {
        return $this->hasMany(Game::className(), ['t_id' => 't_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTt()
    {
        return $this->hasOne(TableType::className(), ['tt_id' => 'tt_id']);
    }
}
