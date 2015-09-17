<?php

namespace MailQ;

interface IConnectorFactory {

    /**
     * 
     * @param type $baseUrl
     * @param type $apiKey
     * @return \MailQ\Connector
     */
    public function create($baseUrl,$apiKey);
}
