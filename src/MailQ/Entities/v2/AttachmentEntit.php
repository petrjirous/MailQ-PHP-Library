<?php

namespace MailQ\Entities\v2;

class AttachmentEntity extends \MailQ\Entities\BaseEntity {
    
    /**
     * @in
     * @out
     * @var string 
     */
    private $displayName;
    /**
     * @in
     * @out
     * @var string  
     */
    private $link;
    
    /**
     * @in
     * @out
     * @var string  
     */
    private $mimeType;
    
    /**
     * @in
     * @out
     * @var string  
     */
    private $source;
      
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
    
    public function getSource() {
        return $this->source;
    }

    public function setSource($source) {
        $this->source = $source;
    }






}
