<?php

namespace MailQ\Resources;

use MailQ\Entities\v2\ApiKeyEntity;
use MailQ\Entities\v2\CompanyEntity;
use MailQ\Request;

class CompanyResource extends BaseResource {
    
    /**
     * @param type $companyId
     * @return \MailQ\Entities\CompanyEntity
     */
    public function getCompany($companyId = null) {
        $request = Request::get("{$this->getConnector()->getCompanyId($companyId)}");
        $response = $this->getConnector()->sendRequest($request);
        return new CompanyEntity($response->getContent());
    }
    
    /**
     * @param type $companyId
     * @return string New API key
     */
    public function regenerateApiKey($companyId = null) {
        $request = Request::put("{$this->getConnector()->getCompanyId($companyId)}");
        $response = $this->getConnector()->sendRequest($request);
        $apiKeyEntity = new ApiKeyEntity($response->getContent());
        return $apiKeyEntity->getApiKey();
    }
    
}
