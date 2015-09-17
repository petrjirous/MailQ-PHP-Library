<?php

namespace MailQ\Entities\v2;

use MailQ\Entities\BaseEntity;

class SenderEmailsEntity extends BaseEntity {

   
    /**
     *
     * @in
     * @out
     * @var SenderEmailEntity 
     * @collection
     */
    private $emails;
    
    function getEmails() {
        return $this->emails;
    }

    function setEmails($emails) {
        $this->emails = $emails;
    }



}
