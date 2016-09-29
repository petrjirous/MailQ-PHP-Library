<?php

namespace MailQ\Resources;

use MailQ\Entities\v2\CampaignEntity;
use MailQ\Entities\v2\CampaignsEntity;
use MailQ\Entities\v2\CompanyEntity;
use MailQ\Request;
use stdClass;

trait CampaignResource
{

	/**
	 *
	 * @return CompanyEntity
	 */
	public function getCampaigns()
	{
		$request = Request::get("{$this->getCompanyId()}/campaigns");
		$response = $this->getConnector()->sendRequest($request);
		$data = Json::decode($response->getContent());
		$json = new stdClass();
		$json->campaigns = $data;
		return new CampaignsEntity($json);
	}

	/**
	 * @param $campaignId
	 * @return CampaignEntity
	 */
	public function getCampaign($campaignId)
	{
		$request = Request::put("{$this->getCompanyId()}/campaigns/{$campaignId}");
		$response = $this->getConnector()->sendRequest($request);
		return new CampaignEntity($response->getContent());
	}

}
