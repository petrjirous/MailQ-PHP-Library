<?php

namespace MailQ\Resources;

use MailQ\Entities\v2\SenderEmailEntity;
use MailQ\Entities\v2\SenderEmailsEntity;
use MailQ\Entities\v2\UserEntity;
use MailQ\Entities\v2\UsersEntity;
use MailQ\Request;
use Nette\Utils\Json;
use stdClass;

class SenderEmailResource extends BaseResource{
    
    
    /**
     * @param type $companyId
     * @return UsersEntity
     */
    public function getSenderEmails($companyId = null) {
        $request = Request::get("{$this->getConnector()->getCompanyId($companyId)}/sender-emails");
        $response = $this->getConnector()->sendRequest($request);
        $data = Json::decode($response->getContent());
        $json = new stdClass();
        $json->emails = $data;
        return new SenderEmailsEntity($json);
    }
    
   
    /**
     * @param type $senderEmailId
     * @param type $companyId
     * @return UserEntity
     */
    public function getSenderEmail($senderEmailId,$companyId = null) {
        $request = Request::get("{$this->getConnector()->getCompanyId($companyId)}/sender-emails/{$senderEmailId}");
        $response = $this->getConnector()->sendRequest($request);
        return new SenderEmailEntity($response->getContent());
    }
    
}
