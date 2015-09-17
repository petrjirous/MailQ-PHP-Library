<?php

namespace MailQ\Entities\v2;

use MailQ\Entities\BaseEntity;

class UnsubscriberEntity extends BaseEntity {
 
    
    /**
     * @in
     * @out 
     * @var string
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
     * @var string
     */
    private $unsubcribed;
    /**
     * @in
     * @out
     * @var string
     */
    private $action;
     /**
     * @in
     * @out
     * @var LinkEntity
     */
    private $recipientsList;
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

    function getUnsubcribed() {
        return $this->unsubcribed;
    }

    function getAction() {
        return $this->action;
    }

    function getRecipientsList() {
        return $this->recipientsList;
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

    function setUnsubcribed($unsubcribed) {
        $this->unsubcribed = $unsubcribed;
    }

    function setAction($action) {
        $this->action = $action;
    }

    function setRecipientsList(LinkEntity $recipientsList) {
        $this->recipientsList = $recipientsList;
    }

    function setCompany(LinkEntity $company) {
        $this->company = $company;
    }


}
