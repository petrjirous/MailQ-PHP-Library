<?php

namespace MailQ\Resources;

use MailQ\Entities\v2\NotificationDataEntity;
use MailQ\Entities\v2\NotificationEntity;
use MailQ\Entities\v2\NotificationsDataEntity;
use MailQ\Entities\v2\NotificationsEntity;
use MailQ\Request;
use Nette\Utils\Json;
use stdClass;

trait NotificationResource {
    
    
    /**
     * 
     * @param NotificationEntity $notification
     * @return NotificationEntity
     */
    public function createNotification(NotificationEntity $notification) {
        $request = Request::post("{$this->getCompanyId()}/notifications/");
        $request->setContentAsEntity($notification);
        $response = $this->getConnector()->sendRequest($request);
        $notification->setId($response->getCreatedId());
        return $notification;
    }
    
    /**
     * 
     * @param NotificationEntity $notification
     * @param integer $notificationId
     */
    public function updateNotification(NotificationEntity $notification,$notificationId) {
        $request = Request::put("{$this->getCompanyId()}/notifications/{$notificationId}");
        $request->setContentAsEntity($notification);
        $this->getConnector()->sendRequest($request);
    }
    
    /**
     * 
     * @param integer $notificationId
     */
    public function deleteNotification($notificationId) {
        $request = Request::delete("{$this->getCompanyId()}/notifications/{$notificationId}");
        $this->getConnector()->sendRequest($request);
    }
    
    /**
     * 
     * @param NotificationDataEntity $notificationData
     * @param integer $notificationId
     */
    public function sendNotificationEmail(NotificationDataEntity $notificationData,$notificationId) {
        $request = Request::post("{$this->getCompanyId()}/notifications/{$notificationId}/data");
        $request->setContentAsEntity($notificationData);
        $response = $this->getConnector()->sendRequest($request);
        $notificationData->setId($response->getCreatedId());
    }
    
    /**
     * 
     * @param integer $notificationId
     * @param integer $notificationDataId
     * @return NotificationDataEntity
     */
    public function getNotificationData($notificationId,$notificationDataId) {
        $request = Request::post("{$this->getCompanyId()}/notifications/{$notificationId}/data/{$notificationDataId}");
        $response = $this->getConnector()->sendRequest($request);
        return new NotificationDataEntity($response->getContent());
    }
    
    /**
     * 
     * @param integer $notificationId
     * @param string $email
     * @return NotificationsDataEntity
     */
    public function getNotificationsData($notificationId,$email) {
        $request = Request::post("{$this->getCompanyId()}/notifications/{$notificationId}/history/{$email}");
        $response = $this->getConnector()->sendRequest($request);
        $data = Json::decode($response->getContent());
        $json = new stdClass();
        $json->notifications = $data;
        return new NotificationsDataEntity($response->getContent());
    }

    
    /**
     * 
     * @return NotificationsEntity
     */
    public function getNotifications() {
        $request = Request::get("{$this->getCompanyId()}/notifications");
        $response = $this->getConnector()->sendRequest($request);
        $data = Json::decode($response->getContent());
        $json = new stdClass();
        $json->notifications = $data;
        return new NotificationsEntity($json);
    }
    
   
    /**
     * 
     * @param integer $notificationId
     * @return NotificationEntity
     */
    public function getNotification($notificationId) {
        $request = Request::get("{$this->getCompanyId()}/notifications/{$notificationId}");
        $response = $this->getConnector()->sendRequest($request);
        return new NotificationEntity($response->getContent());
    }
    
}
