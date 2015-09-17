<?php

namespace MailQ\Entities\v2;

use MailQ\Entities\BaseEntity;

class SmsResultEntity extends BaseEntity {

    
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
    private $result;
    /**
     * @in
     * @out
     * @var string 
     */
    private $url;
    
    public function getId() {
        return $this->id;
    }

    public function getResult() {
        return $this->result;
    }

    public function getUrl() {
        return $this->url;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setResult($result) {
        $this->result = $result;
    }

    public function setUrl($url) {
        $this->url = $url;
    }






}
