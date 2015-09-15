<?php

namespace MailQ\Entities\v2;

use MailQ\Entities\BaseEntity;

class NewslettersEntity extends BaseEntity {

   
    /**
     * @in
     * @out
     * @var NewsletterEntity
     * @collection
     */
    private $newsletters;
    
   
    public function getNewsletters() {
        return $this->newsletters;
    }

    public function setNewsletters($newsletters) {
        $this->newsletters = $newsletters;
    }

}
