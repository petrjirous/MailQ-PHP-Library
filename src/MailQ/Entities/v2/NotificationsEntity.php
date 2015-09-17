<?php

namespace MailQ\Entities\v2;

use MailQ\Entities\BaseEntity;

class NotificationsEntity extends BaseEntity {

   
    /**
     * @in
     * @out
     * @var NotificationEntity
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
