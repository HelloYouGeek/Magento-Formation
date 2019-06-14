<?php

namespace Louise\FirstModule\Model;

class Objet extends \Magento\Framework\Model\AbstractModel implements \Louise\FirstModule\Api\Data\ObjetInterface
{

	 /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Louise\FirstModule\Model\ResourceModel\Objet');
    }

    public function getTitleTest(){
        return $this->getData('title');
    }


    /**
     * Get title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->getData(self::TITLE);
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->getData(self::CONTENT);
    }

    /**
     * Set title
     *
     * @param string title
     * @return \Louise\FirstModule\Api\Data\ObjetInterface
     */
    public function setTitle($title)
    {
        return $this->setData(self::TITLE, $title);
    }

    /**
     * Set content
     *
     * @param string $content
     * @return \Louise\FirstModule\Api\Data\ObjetInterface
     */
    public function setContent($content)
    {
        return $this->setData(self::CONTENT, $content);
    }


}