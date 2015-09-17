<?php

namespace MailQ\Entities\v2;

use MailQ\Entities\BaseEntity;

class RecipientsListsEntity extends BaseEntity {

  
    /**
     * @in
     * @out
     * @var RecipientsListEntity
     * @collection 
     */
    private $recipientsLists;

    public function getRecipientsLists() {
        return $this->recipientsLists;
    }

    public function setRecipientsLists($recipientsLists) {
        $this->recipientsLists = $recipientsLists;
    }




}
