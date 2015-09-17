<?php

namespace MailQ\Entities\v2;

use MailQ\Entities\BaseEntity;

class UnsubscribersEntity extends BaseEntity{
    
    /**
     * @in
     * @out
     * @var UnsubscriberEntity
     * @collection
     */
    private $unsubscribers;
    
    
    function getUnsubscribers() {
        return $this->unsubscribers;
    }

    function setUnsubscribers($unsubscribers) {
        $this->unsubscribers = $unsubscribers;
    }


    
}
