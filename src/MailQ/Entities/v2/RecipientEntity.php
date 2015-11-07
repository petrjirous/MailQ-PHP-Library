<?php

namespace MailQ\Entities\v2;

use MailQ\Entities\BaseEntity;

class RecipientEntity extends BaseEntity {

  
    /**
     * @in
     * @out
     * @var string 
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

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setData($data) {
        $this->data = $data;
    }



}
