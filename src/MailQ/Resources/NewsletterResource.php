<?php

namespace MailQ\Resources;

use MailQ\Entities\v2\ApiKeyEntity;
use MailQ\Entities\v2\NewslettersEntity;
use MailQ\Request;
use Nette\Utils\Json;
use stdClass;

class NewsletterResource extends BaseResource {
    
    /**
     * @param type $companyId
     * @return NewslettersEntity
     */
    public function getNewsletters($companyId = null) {
        $request = Request::get("{$this->getConnector()->getCompanyId($companyId)}/newsletters");
        $response = $this->getConnector()->sendRequest($request);
        $data = Json::decode($response->getContent());
        $json = new stdClass();
        $json->newsletters = $data;
        return new NewslettersEntity($json);
    }
    
    /**
     * @param type $companyId
     * @return string New API key
     */
    public function getNewsletter($newsletterId,$companyId = null) {
        $request = Request::get("{$this->getConnector()->getCompanyId($companyId)}/newsletters/{$newsletterId}");
        $response = $this->getConnector()->sendRequest($request);
        return new \MailQ\Entities\v2\NewsletterEntity($response->getContent());
    }
    
}
