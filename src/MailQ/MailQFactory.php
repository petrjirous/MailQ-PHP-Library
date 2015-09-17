<?php

use MailQ\Connector;
use MailQ\MailQ;


class MailQFactory {
    

    private $baseUrl;
    private $apiKey;


    public function __construct($baseUrl,$apiKey) {
        $this->baseUrl = $baseUrl;
        $this->apiKey = $apiKey;
    }
    
    
    public function createMailQ($companyId) {
        $connector = Connector::getInstance($this->baseUrl, $this->apiKey);
        return new MailQ($connector,$companyId);
    }

}
