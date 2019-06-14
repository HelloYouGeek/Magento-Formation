<?php

namespace Louise\FirstModule\Api\Data;

interface ObjetInterface{

    const OBJET_ID = 'objet_id';
    const TITLE = 'title';
    const CONTENT = 'content';


    /**
     * Get title
     *
     * @return string|null
     */
    public function getTitle();

    /**
     * Get content
     *
     * @return string|null
     */
    public function getContent();

    /**
     * Set title
     *
     * @param string title
     * @return \Louise\FirstModule\Api\Data\ObjetInterface
     */
    public function setTitle($title);

    /**
     * Set content
     *
     * @param string $content
     * @return \Louise\FirstModule\Api\Data\ObjetInterface
     */
    public function setContent($content);
}