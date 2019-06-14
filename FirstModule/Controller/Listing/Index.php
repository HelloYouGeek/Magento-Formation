<?php

namespace Louise\FirstModule\Controller\Listing;


class Index extends \Magento\Framework\App\Action\Action
{
    protected $helperData;

	public function __construct(\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory//,
        //\Louise\FirstModule\Helper\Data $helperData
		)
    {
        //$this->helperData = $helperData;
    	$this->pageFactory = $pageFactory;
    	parent::__construct($context);
    }
	
	  public function execute()
    {
    		return $this->pageFactory->create();
    }
}
