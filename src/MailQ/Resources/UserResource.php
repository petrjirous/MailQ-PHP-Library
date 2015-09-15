<?php

namespace MailQ\Resources;

use MailQ\Entities\v2\UserEntity;
use MailQ\Entities\v2\UsersEntity;
use MailQ\Request;
use Nette\Utils\Json;
use stdClass;

class UserResource  extends BaseResource{
    
    

    
    /**
     * @param type $companyId
     * @return UsersEntity
     */
    public function getUsers($companyId = null) {
        $request = Request::get("{$this->getConnector()->getCompanyId($companyId)}/users");
        $response = $this->getConnector()->sendRequest($request);
        $data = Json::decode($response->getContent());
        $json = new stdClass();
        $json->users = $data;
        return new UsersEntity($json);
    }
    
   
    /**
     * @param type $userId
     * @param type $companyId
     * @return UserEntity
     */
    public function getUser($userId,$companyId = null) {
        $request = Request::get("{$this->getConnector()->getCompanyId($companyId)}/users/{$userId}");
        $response = $this->getConnector()->sendRequest($request);
        return new UserEntity($response->getContent());
    }
    
}
