<?php

namespace Louise\FirstModule\Model\ResourceModel;

class Objet extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('louisefirstmodule_objet', 'objet_id');
    }

}