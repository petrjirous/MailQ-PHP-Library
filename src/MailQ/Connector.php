<?php

namespace MailQ;

use MailQ\Exceptions\MailQException;
use MailQ\Exceptions\UnresolvedMxDomainException;

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
            $url .= '?'.http_build_query($request->getParameters());
        }
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_HEADERFUNCTION, array($this,'storeHeader'));
        curl_setopt($ch, CURLOPT_HTTPHEADER, $curlHeaders);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
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
        $responseData = curl_exec($ch);
        $response = $this->createResponse($ch,$responseData);
        curl_close($ch);
        return $response;
    }
    
    /**
     * 
     * @param $ch
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
            case 401: throw new MailQException("Invalid API key.",$responseData->getHttpCode());
            case 405: throw new MailQException(" Method not allowed.",$responseData->getHttpCode());
            default: $this->handleDefaultException($responseData,$response);
        }
    }
	
	private function handleDefaultException(Response $responseData,$response) {
		$errorData = json_decode($response);
		if ($errorData) {
			if (isset($errorData->error)) {
				$this->createSpecificException($errorData->error);
			}
		}
		else {
			throw new MailQException("Unknonw exception",$responseData->getHttpCode());
		}
	}
	
	private function createSpecificException($errorData) {
		if ($errorData->message == 'Could not resolve MX domain.') {
			throw new UnresolvedMxDomainException($errorData->message,$errorData->code);
		}
		else {
			throw new MailQException($errorData->message,$errorData->code);
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
