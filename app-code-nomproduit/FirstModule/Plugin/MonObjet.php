<?php

namespace Louise\FirstModule\Plugin;

class MonObjet{

    public function afterGetTitleTest(\Louise\FirstModule\Model\Objet $objet, $result)
    {
        return "_-_-_ ".$result." _-_-_";
    }
}