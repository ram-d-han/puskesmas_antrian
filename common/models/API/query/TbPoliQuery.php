<?php

namespace common\models\API\query;

/**
 * This is the ActiveQuery class for [[\common\models\API\TbPoli]].
 *
 * @see \common\models\API\TbPoli
 */
class TbPoliQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\API\TbPoli[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\API\TbPoli|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
