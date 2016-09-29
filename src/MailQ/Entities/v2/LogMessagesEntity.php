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

    /**
     * @return LogMessageEntity
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * @param LogMessageEntity $messages
     * @return LogMessagesEntity
     */
    public function setMessages($messages)
    {
        $this->messages = $messages;
        return $this;
    }

    


}
