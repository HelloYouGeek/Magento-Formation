<?php

namespace Louise\FirstModule\Model\ResourceModel\Objet;


class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

	 /**
     * Define resource model
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('Louise\FirstModule\Model\Objet', 'Louise\FirstModule\Model\ResourceModel\Objet');
    }



}