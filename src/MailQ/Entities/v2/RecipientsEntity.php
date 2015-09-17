<?php

namespace MailQ\Entities\v2;

use MailQ\Entities\BaseEntity;

class RecipientsEntity extends BaseEntity {

  
    /**
     * @in
     * @out
     * @var RecipientEntity
     * @collection
     */
   private $recipients;

   public function getRecipients() {
       return $this->recipients;
   }

   public function setRecipients(RecipientEntity $recipients) {
       $this->recipients = $recipients;
   }




}
