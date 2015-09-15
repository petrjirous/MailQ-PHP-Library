<?php

namespace MailQ\Entities\v2;

use MailQ\Entities\BaseEntity;

class CompanyEntity extends BaseEntity {

    /**
     * @in
     * @var integer 
     */
    private $id;
    /**
     * @in
     * @var string 
     */
    private $name;
    /**
     * @in
     * @var string 
     */
    private $apiKey;
    /**
     * @in
     * @var string 
     */
    private $defaultSendAs;
    /**
     * @in
     * @var string 
     */
    private $defaultSenderEmail;
    /**
     * @in
     * @var LinkEntity
     * @collection
     */
    private $users;
    /**
     * @in
     * @var LinkEntity
     * @collection
     */
    private $senderEmails;

    /**
     * @in
     * @var LinkEntity
     * @collection
     */
    private $recipientsLists;
    
    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getApiKey() {
        return $this->apiKey;
    }

    function getDefaultSendAs() {
        return $this->defaultSendAs;
    }

    function getDefaultSenderEmail() {
        return $this->defaultSenderEmail;
    }

    function getUsers() {
        return $this->users;
    }

    function getSenderEmails() {
        return $this->senderEmails;
    }

    function getRecipientsLists() {
        return $this->recipientsLists;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setApiKey($apiKey) {
        $this->apiKey = $apiKey;
    }

    function setDefaultSendAs($defaultSendAs) {
        $this->defaultSendAs = $defaultSendAs;
    }

    function setDefaultSenderEmail($defaultSenderEmail) {
        $this->defaultSenderEmail = $defaultSenderEmail;
    }

    function setUsers($users) {
        $this->users = $users;
    }

    function setSenderEmails($senderEmails) {
        $this->senderEmails = $senderEmails;
    }

    function setRecipientsLists($recipientsLists) {
        $this->recipientsLists = $recipientsLists;
    }



}
