<?php

namespace MailQ;

interface IConnectorFactory {

    /**
     * 
     * @param string $baseUrl
     * @param string $apiKey
     * @return \MailQ\Connector
     */
    public function create($baseUrl,$apiKey);
}
