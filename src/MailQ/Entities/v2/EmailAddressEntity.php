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

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return EmailAddressEntity
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }
    
    


    
    
}
