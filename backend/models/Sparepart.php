<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Sparepart".
 *
 * @property int $spp_id ID
 * @property string $spp_name Name
 * @property float $spp_costexcl CostExcl
 * @property float $spp_vatperc VatPerc
 *
 * @property Mjbspp[] $mjbspps
 * @property Sppbrd[] $sppbrds
 */
class Sparepart extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Sparepart';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['spp_id', 'spp_name', 'spp_costexcl', 'spp_vatperc'], 'required'],
            [['spp_id'], 'integer'],
            [['spp_costexcl', 'spp_vatperc'], 'number'],
            [['spp_name'], 'string', 'max' => 255],
            [['spp_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'spp_id' => 'ID',
            'spp_name' => 'Name',
            'spp_costexcl' => 'CostExcl',
            'spp_vatperc' => 'VatPerc',
        ];
    }

    /**
     * Gets query for [[Mjbspps]].
     *
     * @return \yii\db\ActiveQuery|MjbsppQuery
     */
    public function getMjbspps()
    {
        return $this->hasMany(Mjbspp::class, ['spp_id' => 'spp_id']);
    }

    /**
     * Gets query for [[Sppbrds]].
     *
     * @return \yii\db\ActiveQuery|SppbrdQuery
     */
    public function getSppbrds()
    {
        return $this->hasMany(Sppbrd::class, ['spp_id' => 'spp_id']);
    }

    /**
     * {@inheritdoc}
     * @return SparepartQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SparepartQuery(get_called_class());
    }
}
