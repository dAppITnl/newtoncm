<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Car".
 *
 * @property int $car_id ID
 * @property int $carcmd_id CarModel
 * @property int $carcst_id Customer
 * @property string $car_license License
 *
 * @property Carmodel $carcmd
 * @property Customer $carcst
 * @property Smjcar[] $smjcars
 */
class Car extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Car';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['car_id', 'carcmd_id', 'carcst_id', 'car_license'], 'required'],
            [['car_id', 'carcmd_id', 'carcst_id'], 'integer'],
            [['car_license'], 'string', 'max' => 32],
            [['car_id'], 'unique'],
            [['carcmd_id'], 'exist', 'skipOnError' => true, 'targetClass' => Carmodel::class, 'targetAttribute' => ['carcmd_id' => 'cmd_id']],
            [['carcst_id'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::class, 'targetAttribute' => ['carcst_id' => 'cst_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'car_id' => 'ID',
            'carcmd_id' => 'CarModel',
            'carcst_id' => 'Customer',
            'car_license' => 'License',
        ];
    }

    /**
     * Gets query for [[Carcmd]].
     *
     * @return \yii\db\ActiveQuery|CarmodelQuery
     */
    public function getCarcmd()
    {
        return $this->hasOne(Carmodel::class, ['cmd_id' => 'carcmd_id']);
    }

    /**
     * Gets query for [[Carcst]].
     *
     * @return \yii\db\ActiveQuery|CustomerQuery
     */
    public function getCarcst()
    {
        return $this->hasOne(Customer::class, ['cst_id' => 'carcst_id']);
    }

    /**
     * Gets query for [[Smjcars]].
     *
     * @return \yii\db\ActiveQuery|SmjcarQuery
     */
    public function getSmjcars()
    {
        return $this->hasMany(Smjcar::class, ['car_id' => 'car_id']);
    }

    /**
     * {@inheritdoc}
     * @return CarQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CarQuery(get_called_class());
    }
}
