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

    /**
     * @return boolean
     */
    public function isStart()
    {
        return $this->start;
    }

    /**
     * @param boolean $start
     * @return NewsletterCommandEntity
     */
    public function setStart($start)
    {
        $this->start = $start;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isStop()
    {
        return $this->stop;
    }

    /**
     * @param boolean $stop
     * @return NewsletterCommandEntity
     */
    public function setStop($stop)
    {
        $this->stop = $stop;
        return $this;
    }
    
   




}
