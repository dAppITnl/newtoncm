<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Scheduledmaintenancejob".
 *
 * @property int $smj_id ID
 * @property int|null $smjtsl_id Timeslot
 * @property int|null $smjeng_id Engineer
 * @property int|null $smjmjb_id MaintenanceJob
 * @property string $smj_title Title
 *
 * @property Smjcar[] $smjcars
 * @property Engineer $smjeng
 * @property Maintenancejob $smjmjb
 * @property Timeslot $smjtsl
 */
class Scheduledmaintenancejob extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Scheduledmaintenancejob';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['smj_id', 'smj_title'], 'required'],
            [['smj_id', 'smjtsl_id', 'smjeng_id', 'smjmjb_id'], 'integer'],
            [['smj_title'], 'string', 'max' => 255],
            [['smj_id'], 'unique'],
            [['smjeng_id'], 'exist', 'skipOnError' => true, 'targetClass' => Engineer::class, 'targetAttribute' => ['smjeng_id' => 'eng_id']],
            [['smjmjb_id'], 'exist', 'skipOnError' => true, 'targetClass' => Maintenancejob::class, 'targetAttribute' => ['smjmjb_id' => 'mjb_id']],
            [['smjtsl_id'], 'exist', 'skipOnError' => true, 'targetClass' => Timeslot::class, 'targetAttribute' => ['smjtsl_id' => 'tsl_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'smj_id' => 'ID',
            'smjtsl_id' => 'Timeslot',
            'smjeng_id' => 'Engineer',
            'smjmjb_id' => 'MaintenanceJob',
            'smj_title' => 'Title',
        ];
    }

    /**
     * Gets query for [[Smjcars]].
     *
     * @return \yii\db\ActiveQuery|SmjcarQuery
     */
    public function getSmjcars()
    {
        return $this->hasMany(Smjcar::class, ['smj_id' => 'smj_id']);
    }

    /**
     * Gets query for [[Smjeng]].
     *
     * @return \yii\db\ActiveQuery|EngineerQuery
     */
    public function getSmjeng()
    {
        return $this->hasOne(Engineer::class, ['eng_id' => 'smjeng_id']);
    }

    /**
     * Gets query for [[Smjmjb]].
     *
     * @return \yii\db\ActiveQuery|MaintenancejobQuery
     */
    public function getSmjmjb()
    {
        return $this->hasOne(Maintenancejob::class, ['mjb_id' => 'smjmjb_id']);
    }

    /**
     * Gets query for [[Smjtsl]].
     *
     * @return \yii\db\ActiveQuery|TimeslotQuery
     */
    public function getSmjtsl()
    {
        return $this->hasOne(Timeslot::class, ['tsl_id' => 'smjtsl_id']);
    }

    /**
     * {@inheritdoc}
     * @return ScheduledmaintenancejobQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ScheduledmaintenancejobQuery(get_called_class());
    }
}
