<?php

namespace MailQ\Entities\v2;

use MailQ\Entities\BaseEntity;

class LogMessagesEntity extends BaseEntity{
    
    /**
     * @in
     * @out
     * @var LogMessageEntity
     * @collection
     */
    private $messages;
    
    
    function getMessages() {
        return $this->messages;
    }

    function setMessages($messages) {
        $this->messages = $messages;
    }
 
}
