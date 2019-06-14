<?php

namespace Louise\FirstModule\Controller\Adminhtml\Myadmin;


class Index extends \Magento\Backend\App\Action
{

	public function __construct(\Magento\Backend\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory//
		)
    {
    	$this->pageFactory = $pageFactory;
    	parent::__construct($context);
    }
	
	  public function execute()
    {
        return $this->pageFactory->create();
    }
}
