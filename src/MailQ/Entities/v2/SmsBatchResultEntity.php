<?php

namespace MailQ\Entities\v2;

use MailQ\Entities\BaseEntity;

class SmsBatchResultEntity extends BaseEntity {

   
    /**
     * @in
     * @out
     * @var SmsResultEntity
     * @collection
     */
    private $results;
    
   
    public function getResults() {
        return $this->results;
    }

    public function setResults($results) {
        $this->results = $results;
    }






}
