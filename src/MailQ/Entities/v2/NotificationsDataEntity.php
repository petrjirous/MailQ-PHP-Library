<?php

namespace MailQ\Entities\v2;

use MailQ\Entities\BaseEntity;

class NotificationsDataEntity extends BaseEntity {

   
    /**
     * @in
     * @out
     * @var NotificationDataEntity
     * @collection
     */
    private $notifications;
    
   
    public function getNotifications() {
        return $this->notifications;
    }

    public function setNotifications($notifications) {
        $this->notifications = $notifications;
    }





}
