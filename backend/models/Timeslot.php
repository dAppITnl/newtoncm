<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Timeslot".
 *
 * @property int $tsl_id ID
 * @property string $tsl_starttime Starttime
 * @property string|null $tsl_endtime Endtime
 *
 * @property Scheduledmaintenancejob[] $scheduledmaintenancejobs
 */
class Timeslot extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Timeslot';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tsl_id', 'tsl_starttime'], 'required'],
            [['tsl_id'], 'integer'],
            [['tsl_starttime', 'tsl_endtime'], 'safe'],
            [['tsl_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tsl_id' => 'ID',
            'tsl_starttime' => 'Starttime',
            'tsl_endtime' => 'Endtime',
        ];
    }

    /**
     * Gets query for [[Scheduledmaintenancejobs]].
     *
     * @return \yii\db\ActiveQuery|ScheduledmaintenancejobQuery
     */
    public function getScheduledmaintenancejobs()
    {
        return $this->hasMany(Scheduledmaintenancejob::class, ['smjtsl_id' => 'tsl_id']);
    }

    /**
     * {@inheritdoc}
     * @return TimeslotQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TimeslotQuery(get_called_class());
    }
}
