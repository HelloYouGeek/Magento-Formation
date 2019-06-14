<?php

namespace Louise\FirstModule\Model;

class ObjetRepository implements \Louise\FirstModule\Api\ObjetRepositoryInterface
{

    /**
     * @var ObjetFactory
     */
    protected $objetFactory;

	 /**
     * Initialize resource model
     * @param ObjetFactory $objetFactory
     * @return void
     */
    protected function _construct(ObjetFactory $objetFactory)
    {
        $this->objetFactory = $objetFactory;
        $this->_init('Louise\FirstModule\Model\ResourceModel\Objet');
    }

    /**
     * Load Objet data by given Objet Identity
     *
     * @param string $objetId
     * @return \Louise\FirstModule\Model\Objet
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getById($objetId)
    {
        $objet = $this->objetFactory->create();
        $objet->load($objetId);
        if (!$objet->getId()) {
            throw new NoSuchEntityException(__('The CMS page with the "%1" ID doesn\'t exist.', $objetId));
        }
        return $objet;
    }

    public function getUpperTextOfString($input = null){
        return strtoupper($input);
    }



}