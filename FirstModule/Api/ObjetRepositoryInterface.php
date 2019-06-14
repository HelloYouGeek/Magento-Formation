<?php

namespace Louise\FirstModule\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

/**
 * @api
 * @since 100.0.2
 */
interface ObjetRepositoryInterface
{

    /**
     * Retrieve objet.
     *
     * @param int $pageId
     * @return \Louise\FirstModule\Api\Data\ObjetInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById($ObjetId);


    /**
     * Renvoi le texte en upper class
     * @param string (optional) Texte à afficher en retour
     * @return string
     */
    public function getUpperTextOfString($input = null);

}
