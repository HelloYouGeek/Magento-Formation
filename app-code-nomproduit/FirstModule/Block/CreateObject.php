<?php


namespace Louise\FirstModule\Block;


class CreateObject extends \Magento\Framework\View\Element\Template
{
    /**
     * @param Template\Context $context
     * @param array $data
     */
    public function __construct(\Magento\Framework\View\Element\Template\Context $context,
        array $data = [],
        \Louise\FirstModule\Model\ResourceModel\Objet\CollectionFactory $objetCollectionFactory)
    {
        parent::__construct($context, $data);

        $this->objetCollectionFactory = $objetCollectionFactory;
    }

    public function getFormAction(){
        return $this->getUrl('louisemodule/form/post', ['_secure' => true]);
    }

}