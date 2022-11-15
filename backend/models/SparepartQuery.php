<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[Sparepart]].
 *
 * @see Sparepart
 */
class SparepartQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Sparepart[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Sparepart|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
