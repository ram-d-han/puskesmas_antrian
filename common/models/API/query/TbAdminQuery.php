<?php

namespace common\models\API\query;

/**
 * This is the ActiveQuery class for [[\common\models\API\TbPasien]].
 *
 * @see \common\models\API\TbPasien
 */
class TbAdminQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\API\TbPasien[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\API\TbPasien|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
