<?php

namespace MailQ\Entities\v2;

use MailQ\Entities\BaseEntity;

class ApiKeyEntity extends BaseEntity {

    /**
     * @in
     * @out
     * @var integer 
     */
    private $id;
   
    /**
     * @in
     * @out
     * @var integer 
     */
    private $apiKey;

    function getId() {
        return $this->id;
    }

    function getApiKey() {
        return $this->apiKey;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setApiKey($apiKey) {
        $this->apiKey = $apiKey;
    }




}
