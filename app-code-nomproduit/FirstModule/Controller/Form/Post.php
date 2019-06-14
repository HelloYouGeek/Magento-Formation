<?php
/**
 *
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Louise\FirstModule\Controller\Form;

use Magento\Framework\App\Action\HttpPostActionInterface as HttpPostActionInterface;
use Magento\Contact\Model\ConfigInterface;
use Magento\Contact\Model\MailInterface;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Request\DataPersistorInterface;
use Magento\Framework\Controller\Result\Redirect;
use Magento\Framework\Exception\LocalizedException;
use Psr\Log\LoggerInterface;
use Magento\Framework\App\ObjectManager;
use Magento\Framework\DataObject;

class Post extends \Magento\Contact\Controller\Index implements HttpPostActionInterface
{
    /**
     * @var DataPersistorInterface
     */
    private $dataPersistor;

    /**
     * @var Context
     */
    private $context;

    /**
     * @var MailInterface
     */
    private $mail;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @param Context $context
     * @param ConfigInterface $contactsConfig
     * @param MailInterface $mail
     * @param DataPersistorInterface $dataPersistor
     * @param LoggerInterface $logger
     */
    public function __construct(
        Context $context,
        ConfigInterface $contactsConfig,
        MailInterface $mail,
        DataPersistorInterface $dataPersistor,
        LoggerInterface $logger = null,
        \Louise\FirstModule\Model\ObjetFactory $objetFactory
    ) {
        parent::__construct($context, $contactsConfig);
        $this->context = $context;
        $this->mail = $mail;
        $this->dataPersistor = $dataPersistor;
        $this->logger = $logger ?: ObjectManager::getInstance()->get(LoggerInterface::class);
        $this->objetFactory = $objetFactory;
    }

    /**
     * Post user question
     *
     * @return Redirect
     */
    public function execute()
    {
        if (!$this->getRequest()->isPost()) {
            return $this->resultRedirectFactory->create()->setPath('*/*/');
        }
        try {
            $this->validatedParams();
            $this->saveData();
            $this->messageManager->addSuccessMessage(
                'Thanks for contacting us with your comments and questions. We\'ll respond to you very soon.'
            );
            $this->dataPersistor->clear('contact_us');
        } catch (LocalizedException $e) {
            $this->messageManager->addErrorMessage($e->getMessage());
            $this->dataPersistor->set('contact_us', $this->getRequest()->getParams());
        } catch (\Exception $e) {
            $this->logger->critical($e);
            $this->messageManager->addErrorMessage(
                __('An error occurred while processing your form. Please try again later.')
            );
            $this->dataPersistor->set('contact_us', $this->getRequest()->getParams());
        }

        return $this->resultRedirectFactory->create()->setPath('louisemodule/listing/index');
    }

    /**
     * @return array
     * @throws \Exception
     */
    private function validatedParams()
    {
        $request = $this->getRequest();
        if (trim($request->getParam('title')) === '') {
            throw new LocalizedException(__('Enter the Name and try again.'));
        }
        if (trim($request->getParam('content')) === '') {
            throw new LocalizedException(__('Enter the comment and try again.'));
        }
        if (trim($request->getParam('hideit')) !== '') {
            throw new \Exception();
        }

        return $request->getParams();
    }

    private function saveData(){
        $request = $this->getRequest();
        $objet = $this->objetFactory->create();
        $objet->setTitle($request->getParam('title'));
        $objet->setContent($request->getParam('content'));
        $objet->save();
    }
}
