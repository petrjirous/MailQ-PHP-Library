<?php

namespace MailQ\Entities\v2;

class LinkEntity extends \MailQ\Entities\BaseEntity {
    
    /**
     * @in
     * @out
     * @var string 
     */
    private $id;
    /**
     * @in
     * @out
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
