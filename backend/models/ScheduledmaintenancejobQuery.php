<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[Scheduledmaintenancejob]].
 *
 * @see Scheduledmaintenancejob
 */
class ScheduledmaintenancejobQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Scheduledmaintenancejob[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Scheduledmaintenancejob|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
