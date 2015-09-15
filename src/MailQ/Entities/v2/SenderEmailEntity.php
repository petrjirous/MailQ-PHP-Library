<?php

namespace MailQ\Entities\v2;

use MailQ\Entities\BaseEntity;

class SenderEmailEntity extends BaseEntity {

    /**
     * @in
     * @out
     * @var integer 
     */
    private $id;

    /**
     * @in
     * @out
     * @var string
     */
    private $email;

    /**
     * @in
     * @out
     * @var LinkEntity
     */
    private $company;
    
    function getId() {
        return $this->id;
    }

    function getEmail() {
        return $this->email;
    }

    function getCompany() {
        return $this->company;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setCompany(LinkEntity $company) {
        $this->company = $company;
    }



}
