<?php

namespace MailQ\Resources;

use MailQ\Connector;
use Nette\Object;

class BaseResource extends Object {

    /**
     * @var Connector 
     */
    private $connector;

    function __construct(Connector $connector) {
        $this->connector = $connector;
    }
    
    protected function getConnector() {
        return $this->connector;
    }



}
