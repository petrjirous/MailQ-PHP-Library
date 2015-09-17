<?php

namespace MailQ\Entities\v2;

use MailQ\Entities\BaseEntity;

class SmsBatchEntity extends BaseEntity {

    
   /**
    * @in
    * @out
    * @var SmsEntity
    * @collection 
    */
    private $batch;


    public function getBatch() {
        return $this->batch;
    }

    public function setBatch(SmsEntity $batch) {
        $this->batch = $batch;
    }






}
