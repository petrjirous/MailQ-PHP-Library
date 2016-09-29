<?php

namespace MailQ;

class Response
{

	/**
	 *
	 * @var string
	 */
	private $content;

	/**
	 *
	 * @var int
	 */
	private $httpCode;

	/**
	 *
	 * @var array
	 */
	private $headers;

	private $createdId;

	/**
	 * @return string
	 */
	public function getContent()
	{
		return $this->content;
	}

	/**
	 * @param string $content
	 * @return Response
	 */
	public function setContent($content)
	{
		$this->content = $content;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getHttpCode()
	{
		return $this->httpCode;
	}

	/**
	 * @param int $httpCode
	 * @return Response
	 */
	public function setHttpCode($httpCode)
	{
		$this->httpCode = $httpCode;
		return $this;
	}


	/**
	 * @param $headers
	 * @return Response
	 */
	function setHeaders($headers)
	{
		$this->headers = $headers;
		if (isset($this->headers) && isset($this->headers["Location"])) {
			$location = $this->headers["Location"];
			$locationParts = explode("/", $location);
			$this->createdId = $locationParts[count($locationParts) - 1];
		}
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getCreatedId()
	{
		return $this->createdId;
	}


	/**
	 * @return bool
	 */
	public function isOk()
	{
		$code = intval($this->httpCode);
		return 300 > $code && $code >= 200;
	}

	/**
	 * @return bool
	 */
	public function isNoContent()
	{
		return intval($this->httpCode) == 204;
	}

	/**
	 * @return bool
	 */
	public function isCreated()
	{
		return intval($this->httpCode) == 201;
	}


}
