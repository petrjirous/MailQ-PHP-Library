<?php

namespace MailQ;

class Connector {
    
    private $apiKey;
    private $baseUrl;
    
    private static $instance;

    function __construct($baseUrl,$apiKey) {
        $this->baseUrl = $baseUrl;
        $this->apiKey = $apiKey;
    }
    
    public static function getInstance($baseUrl,$apiKey) {
        if (!isset(self::$instance)) {
            self::$instance = new Connector($baseUrl, $apiKey);
        }
        return self::$instance;
    }

    /**
     *
     * @var array 
     */
    private $headers;

    /**
     * 
     * @param \MailQ\Request $request
     * @return \MailQ\Response
     */
    public function sendRequest(Request $request) {
        $ch = curl_init();
        $curlHeaders = $this->createCurlHeaders(array_merge($request->getHeaders(),$this->createDefaultHeaders()));
        $url = $this->baseUrl.'/companies/'.$request->getPath();
        if ($request->hasParameters()) {
            $url = '?'.http_build_query($request->getParameters());
        }
        curl_setopt($ch, CURLOPT_URL, $this->baseUrl.'/companies/'.$request->getPath());
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_HEADERFUNCTION, array($this,'storeHeader'));
        curl_setopt($ch, CURLOPT_HTTPHEADER, $curlHeaders);
        if ($request->hasContent()) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, $request->getContent());
        }
        if ($request->isPost()) {
            curl_setopt($ch, CURLOPT_POST, TRUE);
        } elseif ($request->isDelete()) {
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, Request::HTTP_METHOD_DELETE);
        } elseif ($request->isPut()) {
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, Request::HTTP_METHOD_PUT);
        }
        $response = curl_exec($ch);
        curl_close($ch);
        return $this->createResponse($ch,$response);
    }
    
    /**
     * 
     * @param type $ch
     * @param string $response
     * @return Response
     */
    private function createResponse($ch,$response) {
        $responseData = new Response();
        $responseData->setHttpCode(curl_getinfo($ch, CURLINFO_HTTP_CODE));
        if ($responseData->isOk()) {
            if (!$responseData->isNoContent()) {
                $responseData->setContent($response);
            }
        }
        else {
            $this->processError($responseData, $response);
        }
        $responseData->setHeaders($this->headers);
        $responseData->setHttpCode(curl_getinfo($ch, CURLINFO_HTTP_CODE));
        return $responseData;
    }
    
    function processError(Response $responseData,$response) {
        switch ($responseData->getHttpCode()) {
            case 401: throw new \Exception($responseData->getHttpCode()." Invalid API key.");
            case 405: throw new \Exception($responseData->getHttpCode()." Method not allowed.");
            default: throw new \Exception($responseData->getHttpCode().": ".$response);
        }
    }

    /**
     * Storing headers from curl
     * @param $ch
     * @param $str
     * @return int
     */
    function storeHeader($ch, $str) {
        $strex = explode(": ", $str);
        if (count($strex) == 2) {
            $this->headers[$strex[0]] = trim($strex[1]);
        } else {
            $this->headers[] = trim($str);
        }
        return strlen($str);
    }
    
    function createDefaultHeaders() {
        $headers = [
            "X-Api-Key" => $this->apiKey
        ];
        $headers["Content-Type"] = "application/json";
        return $headers;
    }

    function createCurlHeaders($headers) {
        $curlHeaders = [];
        foreach ($headers as $headerName => $value) {
            $curlHeaders[] = $headerName.": ".$value;
        }
        return $curlHeaders;
    }
    
}
