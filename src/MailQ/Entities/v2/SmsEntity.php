<?php

namespace MailQ\Entities\v2;

use MailQ\Entities\BaseEntity;

class SmsEntity extends BaseEntity {

    
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
    private $toNumber;
    /**
     * @in
     * @out
     * @var array 
     */
    private $data;
    /**
     * @in
     * @out
     * @var string 
     */
    private $state;
    /**
     * @in
     * @out
     * @var string 
     */
    private $sendTimestamp;
    /**
     * @in
     * @out
     * @var string 
     */
    private $message;
    
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getToNumber() {
        return $this->toNumber;
    }
    
    public function getData() {
        return $this->data;
    }

    public function getState() {
        return $this->state;
    }

    public function getSendTimestamp() {
        return $this->sendTimestamp;
    }

    public function getMessage() {
        return $this->message;
    }

    public function setToNumber($toNumber) {
        $this->toNumber = $toNumber;
    }

    public function setData($data) {
        $this->data = $data;
    }

    public function setState($state) {
        $this->state = $state;
    }

    public function setSendTimestamp($sendTimestamp) {
        $this->sendTimestamp = $sendTimestamp;
    }

    public function setMessage($message) {
        $this->message = $message;
    }


}
