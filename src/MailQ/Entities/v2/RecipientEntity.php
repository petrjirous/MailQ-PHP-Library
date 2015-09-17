<?php

namespace MailQ\Entities\v2;

use MailQ\Entities\BaseEntity;

class RecipientEntity extends BaseEntity {

  
    /**
     * @in
     * @out
     * @var type 
     */
    private $email;
    /**
     * @in
     * @out
     * @var array 
     */
    private $data;
    
    public function getEmail() {
        return $this->email;
    }

    public function getData() {
        return $this->data;
    }

    public function setEmail(type $email) {
        $this->email = $email;
    }

    public function setData($data) {
        $this->data = $data;
    }



}
