<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[Timeslot]].
 *
 * @see Timeslot
 */
class TimeslotQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Timeslot[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Timeslot|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
