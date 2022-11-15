<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Carmodel".
 *
 * @property int $cmd_id ID
 * @property int $cmdbrd_id Brand
 * @property string $cmd_name Name
 *
 * @property Car[] $cars
 * @property Brand $cmdbrd
 */
class Carmodel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Carmodel';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cmd_id', 'cmdbrd_id', 'cmd_name'], 'required'],
            [['cmd_id', 'cmdbrd_id'], 'integer'],
            [['cmd_name'], 'string', 'max' => 255],
            [['cmd_id'], 'unique'],
            [['cmdbrd_id'], 'exist', 'skipOnError' => true, 'targetClass' => Brand::class, 'targetAttribute' => ['cmdbrd_id' => 'brd_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'cmd_id' => 'ID',
            'cmdbrd_id' => 'Brand',
            'cmd_name' => 'Name',
        ];
    }

    /**
     * Gets query for [[Cars]].
     *
     * @return \yii\db\ActiveQuery|CarQuery
     */
    public function getCars()
    {
        return $this->hasMany(Car::class, ['carcmd_id' => 'cmd_id']);
    }

    /**
     * Gets query for [[Cmdbrd]].
     *
     * @return \yii\db\ActiveQuery|BrandQuery
     */
    public function getCmdbrd()
    {
        return $this->hasOne(Brand::class, ['brd_id' => 'cmdbrd_id']);
    }

    /**
     * {@inheritdoc}
     * @return CarmodelQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CarmodelQuery(get_called_class());
    }
}
