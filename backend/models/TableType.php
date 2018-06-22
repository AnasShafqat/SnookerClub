<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "table_type".
 *
 * @property int $tt_id
 * @property string $tt_name
 * @property string $tt_specification
 * @property string $created_at
 * @property int $created_by
 * @property string $updated_at
 * @property int $updated_by
 *
 * @property Table[] $tables
 */
class TableType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'table_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tt_name', 'tt_specification', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['created_by', 'updated_by'], 'integer'],
            [['tt_name'], 'string', 'max' => 24],
            [['tt_specification'], 'string', 'max' => 120],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tt_id' => Yii::t('app', 'Tt ID'),
            'tt_name' => Yii::t('app', 'Tt Name'),
            'tt_specification' => Yii::t('app', 'Tt Specification'),
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
        return $this->hasMany(Table::className(), ['tt_id' => 'tt_id']);
    }
}
