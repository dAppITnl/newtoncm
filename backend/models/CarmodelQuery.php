<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[Carmodel]].
 *
 * @see Carmodel
 */
class CarmodelQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Carmodel[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Carmodel|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
