<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Customer".
 *
 * @property int $cst_id ID
 * @property string $cst_name Name
 *
 * @property Car[] $cars
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Customer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cst_id', 'cst_name'], 'required'],
            [['cst_id'], 'integer'],
            [['cst_name'], 'string', 'max' => 255],
            [['cst_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'cst_id' => 'ID',
            'cst_name' => 'Name',
        ];
    }

    /**
     * Gets query for [[Cars]].
     *
     * @return \yii\db\ActiveQuery|CarQuery
     */
    public function getCars()
    {
        return $this->hasMany(Car::class, ['carcst_id' => 'cst_id']);
    }

    /**
     * {@inheritdoc}
     * @return CustomerQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CustomerQuery(get_called_class());
    }
}
