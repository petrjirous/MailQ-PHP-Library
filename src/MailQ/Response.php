<?php


class Response {
    
    /**
     *
     * @var type 
     */
    private $content;
    /**
     *
     * @var type 
     */
    private $httpCode;
    /**
     *
     * @var type 
     */
    private $headers;

    function getContent() {
        return $this->content;
    }

    function getHttpCode() {
        return $this->httpCode;
    }

    function getHeaders() {
        return $this->headers;
    }

    function setContent($content) {
        $this->content = $content;
    }

    function setHttpCode($httpCode) {
        $this->httpCode = $httpCode;
    }

    function setHeaders($headers) {
        $this->headers = $headers;
    }
    
    function isOk() {
        $code = intval($this->httpCode);
        return 300 >  $code && $code  >= 200;
    }
    
    function isNoContent() {
        return intval($this->httpCode) == 204;
    }


}
