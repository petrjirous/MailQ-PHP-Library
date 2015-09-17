<?php

namespace MailQ\Entities\v2;

use MailQ\Entities\BaseEntity;

class SmsNotificationsEntity extends BaseEntity {

   
    /**
     * @in
     * @out
     * @var SmsNotificationEntity
     * @collection
     */
    private $smsNotifications;
    
   
    public function getSmsNotifications() {
        return $this->smsNotifications;
    }

    public function setSmsNotifications($smsNotifications) {
        $this->smsNotifications = $smsNotifications;
    }




}
