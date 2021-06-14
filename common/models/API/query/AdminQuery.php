<?php

namespace common\models\API\query;

/**
 * This is the ActiveQuery class for [[\common\models\API\Admin]].
 *
 * @see \common\models\API\Admin
 */
class AdminQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\API\Admin[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\API\Admin|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
