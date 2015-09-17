<?php

namespace MailQ\Resources;

use MailQ\Entities\v2\LogMessageEntity;
use MailQ\Entities\v2\LogMessagesEntity;
use MailQ\Request;
use Nette\Utils\Json;
use stdClass;

trait LogMessageResource {
      
    /**
     * 
     * @return LogMessagesEntity
     */
    public function getLogMessages() {
        $request = Request::get("{$this->getCompanyId()}/log-messages");
        $response = $this->getConnector()->sendRequest($request);
        $data = Json::decode($response->getContent());
        $json = new stdClass();
        $json->messages = $data;
        return new LogMessagesEntity($json);
    }
    
   
    /**
     * 
     * @param integer $logMessageId
     * @return LogMessageEntity
     */
    public function getLogMessage($logMessageId) {
        $request = Request::get("{$this->getCompanyId()}/log-messages/{$logMessageId}");
        $response = $this->getConnector()->sendRequest($request);
        return new LogMessageEntity($response->getContent());
    }
    
}
