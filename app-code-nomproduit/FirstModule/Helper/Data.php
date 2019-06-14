<?php

namespace Louise\FirstModule\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{

    public function getConfigValue($field, $storeId = null)
    {
        return $this->scopeConfig->getValue(
            $field, \Magento\Store\Model\ScopeInterface::SCOPE_STORE, $storeId
        );

    }
}