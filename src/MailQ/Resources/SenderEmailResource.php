<?php

namespace MailQ\Resources;

use MailQ\Entities\v2\SenderEmailEntity;
use MailQ\Entities\v2\SenderEmailsEntity;
use MailQ\Request;
use Nette\Utils\Json;
use stdClass;

trait SenderEmailResource
{


	/**
	 * @return SenderEmailsEntity
	 */
	public function getSenderEmails()
	{
		$request = Request::get("{$this->getCompanyId()}/sender-emails");
		$response = $this->getConnector()->sendRequest($request);
		$data = Json::decode($response->getContent());
		$json = new stdClass();
		$json->emails = $data;
		return new SenderEmailsEntity($json);
	}


	/**
	 * @param int $senderEmailId
	 * @return SenderEmailEntity
	 */
	public function getSenderEmail($senderEmailId)
	{
		$request = Request::get("{$this->getCompanyId()}/sender-emails/{$senderEmailId}");
		$response = $this->getConnector()->sendRequest($request);
		return new SenderEmailEntity($response->getContent());
	}

}
