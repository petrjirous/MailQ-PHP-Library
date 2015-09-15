<?php

namespace MailQ\Resources;

use DateTime as DateTime2;
use MailQ\Entities\v2\EmailAddressesEntity;
use MailQ\Entities\v2\UnsubscribersEntity;
use MailQ\Request;
use Nette\Utils\DateTime;
use Nette\Utils\Json;
use stdClass;

class UnsubscriberResource extends BaseResource {
    

    
    /**
     * @param DateTime from
     * @param type $companyId
     * @return UnsubscribersEntity
     */
    public function getUnsubscribers(DateTime2 $from = null, $companyId = null) {
        if ($from != null) {
            $parameters = [
                'from' => $from->format('Y-m-d\TH:i:s.uP')
            ];
        }
        $request = Request::get("{$this->getConnector()->getCompanyId($companyId)}/unsubscribers/",$parameters);
        $response = $this->getConnector()->sendRequest($request);
        $data = Json::decode($response->getContent());
        $json = new stdClass();
        $json->unsubscribers = $data;
        return new UnsubscribersEntity($json);
    }
    
    /**
     * @param string email
     * @return UnsubscribersEntity
     */
    public function getUnsubscribersByEmail($email, $companyId = null) {
        $request = Request::get("{$this->getConnector()->getCompanyId($companyId)}/unsubscribers/{$email}");
        $response = $this->getConnector()->sendRequest($request);
        $data = Json::decode($response->getContent());
        $json = new stdClass();
        $json->unsubscribers = $data;
        return new UnsubscribersEntity($json);
    }
    
    /**
     * @param string email
     */
    public function globalUnsubscribe($email, $companyId = null) {
        $request = Request::put("{$this->getConnector()->getCompanyId($companyId)}/unsubscribers/{$email}");
        $this->getConnector()->sendRequest($request);
    }
    
    /**
     * @param string email
     */
    public function deleteUnsubscriber($email, $companyId = null) {
        $request = Request::delete("{$this->getConnector()->getCompanyId($companyId)}/unsubscribers/{$email}");
        $this->getConnector()->sendRequest($request);
    }
    
    /**
     * @param type $companyId
     * @return string New API key
     */
    public function unsubscribe(EmailAddressesEntity $emails,$companyId = null) {
        $request = Request::post("{$this->getConnector()->getCompanyId($companyId)}/unsubscribers/");
        $data = $emails->toArray();
        $json = Json::encode($data['emails']);
        $request->setContent($json);
        $this->getConnector()->sendRequest($request);
    }
    
}
