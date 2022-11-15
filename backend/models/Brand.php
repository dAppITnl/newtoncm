<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Brand".
 *
 * @property int $brd_id ID
 * @property string $brd_name Name
 *
 * @property Carmodel[] $carmodels
 * @property Sppbrd[] $sppbrds
 */
class Brand extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Brand';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['brd_id', 'brd_name'], 'required'],
            [['brd_id'], 'integer'],
            [['brd_name'], 'string', 'max' => 255],
            [['brd_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'brd_id' => 'ID',
            'brd_name' => 'Name',
        ];
    }

    /**
     * Gets query for [[Carmodels]].
     *
     * @return \yii\db\ActiveQuery|CarmodelQuery
     */
    public function getCarmodels()
    {
        return $this->hasMany(Carmodel::class, ['cmdbrd_id' => 'brd_id']);
    }

    /**
     * Gets query for [[Sppbrds]].
     *
     * @return \yii\db\ActiveQuery|SppbrdQuery
     */
    public function getSppbrds()
    {
        return $this->hasMany(Sppbrd::class, ['brd_id' => 'brd_id']);
    }

    /**
     * {@inheritdoc}
     * @return BrandQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new BrandQuery(get_called_class());
    }
}
