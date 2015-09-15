<?php

namespace MailQ\Resources;

use MailQ\Connector;
use MailQ\Entities\v2\LogMessageEntity;
use MailQ\Entities\v2\LogMessagesEntity;
use MailQ\Request;
use Nette\Utils\Json;
use stdClass;

class LogMessageResource extends BaseResource {
    
    /**
     * @var Connector 
     */
    private $connector;
    
    function __construct(Connector  $connector) {
        $this->getConnector() = $connector;
    }

    
    /**
     * @param type $companyId
     * @return LogMessagesEntity
     */
    public function getLogMessages($companyId = null) {
        $request = Request::get("{$this->getConnector()->getCompanyId($companyId)}/log-messages");
        $response = $this->getConnector()->sendRequest($request);
        $data = Json::decode($response->getContent());
        $json = new stdClass();
        $json->messages = $data;
        return new LogMessagesEntity($json);
    }
    
   
    /**
     * @param type $logMessageId
     * @param type $companyId
     * @return LogMessageEntity
     */
    public function getLogMessage($logMessageId,$companyId = null) {
        $request = Request::get("{$this->getConnector()->getCompanyId($companyId)}/log-messages/{$logMessageId}");
        $response = $this->getConnector()->sendRequest($request);
        return new LogMessageEntity($response->getContent());
    }
    
}
