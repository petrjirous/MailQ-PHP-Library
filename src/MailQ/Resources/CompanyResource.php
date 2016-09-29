<?php

namespace MailQ\Resources;

use MailQ\Entities\v2\ApiKeyEntity;
use MailQ\Entities\v2\CompanyEntity;
use MailQ\Request;

trait CompanyResource
{

	/**
	 *
	 * @return CompanyEntity
	 */
	public function getCompany()
	{
		$request = Request::get("{$this->getCompanyId()}");
		$response = $this->getConnector()->sendRequest($request);
		return new CompanyEntity($response->getContent());
	}

	/**
	 *
	 * @return string API key
	 */
	public function regenerateApiKey()
	{
		$request = Request::put("{$this->getCompanyId()}");
		$response = $this->getConnector()->sendRequest($request);
		$apiKeyEntity = new ApiKeyEntity($response->getContent());
		return $apiKeyEntity->getApiKey();
	}

}
