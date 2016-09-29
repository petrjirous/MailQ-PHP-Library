<?php

namespace MailQ;

use MailQ\Resources\CompanyResource;
use MailQ\Resources\LogMessageResource;
use MailQ\Resources\NewsletterResource;
use MailQ\Resources\NotificationResource;
use MailQ\Resources\RecipientListResource;
use MailQ\Resources\SenderEmailResource;
use MailQ\Resources\SmsNotificationResource;
use MailQ\Resources\UnsubscriberResource;
use MailQ\Resources\UserResource;

class MailQ
{

	use CompanyResource,
		LogMessageResource,
		NewsletterResource,
		NotificationResource,
		RecipientListResource,
		SenderEmailResource,
		SmsNotificationResource,
		UnsubscriberResource,
		UserResource;

	/**
	 * @var Connector
	 */
	private $connector;

	private $companyId;

	public function __construct(Connector $connector, $companyId)
	{
		$this->connector = $connector;
		$this->companyId = $companyId;
	}

	public function setCompanyId($companyId)
	{
		$this->companyId = $companyId;
	}

	/**
	 *
	 * @return Connector
	 */
	protected function getConnector()
	{
		return $this->connector;
	}

	protected function getCompanyId()
	{
		return $this->companyId;
	}

}
