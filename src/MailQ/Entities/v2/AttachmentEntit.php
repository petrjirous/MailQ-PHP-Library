<?php

namespace MailQ\Entities\v2;

class AttachmentEntity extends \MailQ\Entities\BaseEntity {
    
    /**
     * @in
     * @var string 
     */
    private $displayName;
    /**
     * @in
     * @var string  
     */
    private $link;
    
    /**
     * @in
     * @var string  
     */
    private $mimeType;
    
    
    public function getDisplayName() {
        return $this->displayName;
    }

    public function getLink() {
        return $this->link;
    }

    public function getMimeType() {
        return $this->mimeType;
    }

    public function setDisplayName($displayName) {
        $this->displayName = $displayName;
    }

    public function setLink($link) {
        $this->link = $link;
    }

    public function setMimeType($mimeType) {
        $this->mimeType = $mimeType;
    }




}
