<?php

namespace MailQ\Entities\v2;

use MailQ\Entities\BaseEntity;

class EmailAddressesEntity extends BaseEntity {
    
    /**
     * @in
     * @out
     * @var EmailAddressEntity 
     * @collection
     */
    private $emails = [];
    
    function getEmails() {
        return $this->emails;
    }

    function addEmail(EmailAddressEntity $email) {
        $this->emails[] = $email;
    }
    
    function setEmails($emails) {
        $this->emails = $emails;
    }


   
}
