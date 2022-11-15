<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[Maintenancejob]].
 *
 * @see Maintenancejob
 */
class MaintenancejobQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Maintenancejob[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Maintenancejob|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
