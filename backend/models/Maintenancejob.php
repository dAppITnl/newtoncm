<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Maintenancejob".
 *
 * @property int $mjb_id ID
 * @property string $mjb_title Title
 *
 * @property Mjbspp[] $mjbspps
 * @property Scheduledmaintenancejob[] $scheduledmaintenancejobs
 */
class Maintenancejob extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Maintenancejob';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mjb_id', 'mjb_title'], 'required'],
            [['mjb_id'], 'integer'],
            [['mjb_title'], 'string', 'max' => 255],
            [['mjb_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'mjb_id' => 'ID',
            'mjb_title' => 'Title',
        ];
    }

    /**
     * Gets query for [[Mjbspps]].
     *
     * @return \yii\db\ActiveQuery|MjbsppQuery
     */
    public function getMjbspps()
    {
        return $this->hasMany(Mjbspp::class, ['mjb_id' => 'mjb_id']);
    }

    /**
     * Gets query for [[Scheduledmaintenancejobs]].
     *
     * @return \yii\db\ActiveQuery|ScheduledmaintenancejobQuery
     */
    public function getScheduledmaintenancejobs()
    {
        return $this->hasMany(Scheduledmaintenancejob::class, ['smjmjb_id' => 'mjb_id']);
    }

    /**
     * {@inheritdoc}
     * @return MaintenancejobQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MaintenancejobQuery(get_called_class());
    }
}
