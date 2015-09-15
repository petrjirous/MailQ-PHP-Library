<?php

namespace MailQ\Entities\v2;

class LinkEntity extends \MailQ\Entities\BaseEntity {
    
    /**
     * @in
     * @var string 
     */
    private $id;
    /**
     * @in
     * @var string  
     */
    private $link;
    
    function getId() {
        return $this->id;
    }

    function getLink() {
        return $this->link;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setLink($link) {
        $this->link = $link;
    }


}
