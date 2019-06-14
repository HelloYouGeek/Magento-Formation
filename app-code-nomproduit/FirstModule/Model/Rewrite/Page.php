<?php

namespace Louise\FirstModule\Model\Rewrite;

class Page extends \Magento\Cms\Model\Page
{
    public function getTitle()
    {
        return parent::getTitle().' Vélociraptor';
    }
}