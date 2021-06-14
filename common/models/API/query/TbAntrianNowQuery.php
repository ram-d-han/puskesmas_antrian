<?php

namespace common\models\API\query;

/**
 * This is the ActiveQuery class for [[\common\models\API\TbAntrianNow]].
 *
 * @see \common\models\API\TbAntrianNow
 */
class TbAntrianNowQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\API\TbAntrianNow[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\API\TbAntrianNow|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
