<?php

namespace MailQ;

use \Nette\Utils\Json;

class Request {
    
    const HTTP_METHOD_GET = 'GET';
    const HTTP_METHOD_PUT = 'PUT';
    const HTTP_METHOD_POST = 'POST';
    const HTTP_METHOD_DELETE = 'DELETE';
    
    /**
     *
     * @var type 
     */
    private $method;
    /**
     *
     * @var array
     */
    private $parameters;
    /**
     * @var array
     */
    private $headers = array();
    /**
     * @var
     */
    private $content;
    /**
     *
     * @var string
     */
    private $path;
    
    function __construct($method, $path) {
        $this->method = $method;
        $this->path = $path;
    }

    
    function setHeaders($headers) {
        $this->headers = $headers;
    }
    
    function setParameters($parameters) {
        $this->parameters = $parameters;
    }

    function getHeaders() {
        if (isset($this->headers)) {
            return $this->headers;
        }
        else {
           return array(); 
        }
        
    }
    
    function hasContent() {
        return isset($this->content);
    }
    
    function hasParameters() {
        return isset($this->parameters) && count($this->parameters) > 0;
    }
    
    function getPath() {
        return $this->path;
    }
    
    function getContent() {
        return $this->content;
    }

    function setContent($content = null) {
        $this->content = $content;
    }
    
    function setContentAsEntity(Entities\BaseEntity $entity) {
        $this->content = Json::encode($entity->toArray());
    }
    
    function getParameters() {
        return $this->parameters;
    }

    
    
    
    function getContentAsJson() {
        return $this->content->toJson();
    }
    
    function isPost() {
        return $this->method === self::HTTP_METHOD_POST;
    }
    
    function isPut() {
        return $this->method === self::HTTP_METHOD_PUT;
    }
    
    function isDelete() {
        return $this->method === self::HTTP_METHOD_DELETE;
    }
    
    /**
     * @return Request
     */
    static function get($path,$parameters = null,$headers = null) {
        return self::createRequest(self::HTTP_METHOD_GET, $path,$parameters,$headers);
    }
    
    /**
     * @return Request
     */
    static function post($path,$parameters = null, $headers = null, Entities\BaseEntity $content = null) {
        return self::createRequest(self::HTTP_METHOD_POST, $path,$headers,$parameters);
    }
    
    /**
     * @return Request
     */
    static function put($path,$parameters = null, $headers = null,Entities\BaseEntity $content = null) {
        return self::createRequest(self::HTTP_METHOD_PUT, $path,$headers,$parameters);
    }
    
    /**
     * @return Request
     */
    static function delete($path,$parameters = null, $headers = null) {
        return self::createRequest(self::HTTP_METHOD_DELETE, $path,$headers,$parameters);
    }
    
    private function createRequest($method,$path,$parameters = null,$headers = null, Entities\BaseEntity $content = null) {
        $request = new Request($method,$path);
        $request->setHeaders($headers);
        $request->setParameters($parameters);
        $request->setContent($content);
        return $request;
    }
    
    

}
