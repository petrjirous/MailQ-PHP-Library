<?php

namespace MailQ\Entities\v2;

use MailQ\Entities\BaseEntity;
class EmailAddressEntity  extends BaseEntity {
    
    /**
     * @in
     * @out
     * @var string 
     */
    private $email;
    
    function getEmail() {
        return $this->email;
    }

    function setEmail($email) {
        $this->email = $email;
    }


    
    
}
