<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Engineer".
 *
 * @property int $eng_id ID
 * @property string $eng_name Name
 *
 * @property Scheduledmaintenancejob[] $scheduledmaintenancejobs
 */
class Engineer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Engineer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['eng_id', 'eng_name'], 'required'],
            [['eng_id'], 'integer'],
            [['eng_name'], 'string', 'max' => 255],
            [['eng_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'eng_id' => 'ID',
            'eng_name' => 'Name',
        ];
    }

    /**
     * Gets query for [[Scheduledmaintenancejobs]].
     *
     * @return \yii\db\ActiveQuery|ScheduledmaintenancejobQuery
     */
    public function getScheduledmaintenancejobs()
    {
        return $this->hasMany(Scheduledmaintenancejob::class, ['smjeng_id' => 'eng_id']);
    }

    /**
     * {@inheritdoc}
     * @return EngineerQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new EngineerQuery(get_called_class());
    }
}
