<?php

namespace MailQ\Entities\v2;

use MailQ\Entities\BaseEntity;

class NewsletterCommandEntity extends BaseEntity {
    
    /**
     * @in
     * @out
     * @var bool 
     */
    private $start;
    /**
     * @in
     * @out
     * @var bool 
     */
    private $stop;
    
    public function getStart() {
        return $this->start;
    }

    public function getStop() {
        return $this->stop;
    }

    public function setStart($start) {
        $this->start = $start;
    }

    public function setStop($stop) {
        $this->stop = $stop;
    }




}
