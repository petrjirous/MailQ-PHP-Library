<?php

namespace MailQ\Resources;

use DateTime;
use MailQ\Entities\v2\EmailAddressesEntity;
use MailQ\Entities\v2\UnsubscribersEntity;
use MailQ\Request;
use stdClass;
use Nette\Utils\Json;

trait UnsubscriberResource {


    /**
     * @param DateTime|null $from
     * @return UnsubscribersEntity
     */
    public function getUnsubscribers(\DateTime $from = null) {
        $parameters = [];
        if ($from != null) {
            $parameters['from'] = $from->format('Y-m-d\TH:i:s.uP');
        }
        $request = Request::get("{$this->getCompanyId()}/unsubscribers/",$parameters);
        $response = $this->getConnector()->sendRequest($request);
        $data = Json::decode($response->getContent());
        $json = new stdClass();
        $json->unsubscribers = $data;
        return new UnsubscribersEntity($json);
    }
    
    /**
     * 
     * @param string $email
     * @return UnsubscribersEntity
     */
    public function getUnsubscribersByEmail($email) {
        $request = Request::get("{$this->getCompanyId()}/unsubscribers/{$email}");
        $response = $this->getConnector()->sendRequest($request);
        $data = Json::decode($response->getContent());
        $json = new stdClass();
        $json->unsubscribers = $data;
        return new UnsubscribersEntity($json);
    }
    
    /**
     * 
     * @param string $email
     */
    public function globalUnsubscribe($email) {
        $request = Request::put("{$this->getCompanyId()}/unsubscribers/{$email}");
        $this->getConnector()->sendRequest($request);
    }
    
    /**
     * 
     * @param string $email
     */
    public function deleteUnsubscriber($email) {
        $request = Request::delete("{$this->getCompanyId()}/unsubscribers/{$email}");
        $this->getConnector()->sendRequest($request);
    }
    
    /**
     * 
     * @param EmailAddressesEntity $emails
     */
    public function unsubscribe(EmailAddressesEntity $emails) {
        $request = Request::post("{$this->getCompanyId()}/unsubscribers/");
        $data = $emails->toArray();
        $json = Json::encode($data['emails']);
        $request->setContent($json);
        $this->getConnector()->sendRequest($request);
    }
    
}
