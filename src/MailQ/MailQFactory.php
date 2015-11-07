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
    
    
    /**
     * @param type $companyId
     * @return MailQ
     */
    public function createMailQ($companyId) {
        if ($companyId != null) {
            $connector = Connector::getInstance($this->baseUrl, $this->apiKey);
            return new MailQ($connector,$companyId);
        }
        else {
            throw new Exception("Cannot create MailQ object without companyId. Expecting number, got {$companyId}.");
        }
        
    }

}
