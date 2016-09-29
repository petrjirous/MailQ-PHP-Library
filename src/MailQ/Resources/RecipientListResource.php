<?php

namespace MailQ\Resources;

use MailQ\Entities\v2\EmailAddressesEntity;
use MailQ\Entities\v2\RecipientEntity;
use MailQ\Entities\v2\RecipientsEntity;
use MailQ\Entities\v2\RecipientsListEntity;
use MailQ\Entities\v2\RecipientsListsEntity;
use MailQ\Entities\v2\UnsubscriberEntity;
use MailQ\Entities\v2\UnsubscribersEntity;
use MailQ\Request;
use Nette\Utils\Json;
use stdClass;

trait RecipientListResource
{


	/**
	 *
	 * @param RecipientsEntity $recipients
	 * @param int $recipientsListId
	 * @param boolean $validate
	 */
	public function addRecipients(RecipientsEntity $recipients, $recipientsListId, $validate = true)
	{
		$parameters = [
			'dont-validate' => !$validate,
		];
		$request = Request::post("{$this->getCompanyId()}/recipients-lists/{$recipientsListId}", $parameters);
		$data = $recipients->toArray();
		$json = Json::encode($data['recipients']);
		$request->setContent($json);
		$this->getConnector()->sendRequest($request);
	}

	/**
	 *
	 * @param RecipientEntity $recipient
	 * @param int $recipientsListId
	 * @param boolean $validate
	 */
	public function updateRecipient(RecipientEntity $recipient, $recipientsListId, $validate = true)
	{
		$parameters = [
			'dont-validate' => !$validate,
		];
		$request = Request::put("{$this->getCompanyId()}/recipients-lists/{$recipientsListId}/recipients/{$recipient->getEmail()}", $parameters);
		$request->setContentAsEntity($recipient);
		$this->getConnector()->sendRequest($request);
	}

	/**
	 *
	 * @param int $recipientsListId
	 * @return UnsubscribersEntity
	 */
	public function getRecipientListUnsubscribers($recipientsListId)
	{
		$request = Request::get("{$this->getCompanyId()}/recipients-lists/{$recipientsListId}/unsubscribers");
		$response = $this->getConnector()->sendRequest($request);
		return UnsubscribersEntity($response->getContent());
	}

	/**
	 *
	 * @param EmailAddressesEntity $emails
	 * @param int $recipientsListId
	 */
	public function addRecipientListUnsubscribers(EmailAddressesEntity $emails, $recipientsListId)
	{
		$request = Request::post("{$this->getCompanyId()}/recipients-lists/{$recipientsListId}/unsubscribers");
		$data = $emails->toArray();
		$json = Json::encode($data['emails']);
		$request->setContent($json);
		$this->getConnector()->sendRequest($request);
	}

	/**
	 *
	 * @param string $email
	 * @param int $recipientsListId
	 */
	public function addRecipientListUnsubscriber($email, $recipientsListId)
	{
		$request = Request::put("{$this->getCompanyId()}/recipients-lists/{$recipientsListId}/unsubscribers/{$email}");
		$this->getConnector()->sendRequest($request);
	}

	/**
	 *
	 * @param string $email
	 * @param int $recipientsListId
	 */
	public function deleteRecipientListUnsubscriber($email, $recipientsListId)
	{
		$request = Request::delete("{$this->getCompanyId()}/recipients-lists/{$recipientsListId}/unsubscribers/{$email}");
		$this->getConnector()->sendRequest($request);
	}

	/**
	 *
	 * @param string $email
	 * @param int $recipientsListId
	 * @return UnsubscriberEntity
	 */
	public function getRecipientListUnsubscriber($email, $recipientsListId)
	{
		$request = Request::put("{$this->getCompanyId()}/recipients-lists/{$recipientsListId}/unsubscribers/{$email}");
		$response = $this->getConnector()->sendRequest($request);
		return new UnsubscriberEntity($response->getContent());
	}

	/**
	 *
	 * @param string $email
	 * @param int $recipientsListId
	 */
	public function deleteRecipient($email, $recipientsListId)
	{
		$request = Request::delete("{$this->getCompanyId()}/recipients-lists/{$recipientsListId}/recipients/{$email}");
		$this->getConnector()->sendRequest($request);
	}

	/**
	 *
	 * @param int $recipientsListId
	 * @return RecipientEntity
	 */
	public function getRecipients($recipientsListId)
	{
		$request = Request::get("{$this->getCompanyId()}/recipients-lists/{$recipientsListId}/recipients");
		$response = $this->getConnector()->sendRequest($request);
		return new RecipientEntity($response->getContent());
	}

	/**
	 * @param RecipientsListEntity $recipientsList
	 * @return RecipientsListEntity
	 */
	public function createRecipientsList(RecipientsListEntity $recipientsList)
	{
		$request = Request::post("{$this->getCompanyId()}/recipients-lists");
		$request->setContentAsEntity($recipientsList);
		$response = $this->getConnector()->sendRequest($request);
		$recipientsList->setId($response->getCreatedId());
		return $recipientsList;
	}

	/**
	 *
	 * @param int $recipientsListId
	 */
	public function deleteRecipientsList($recipientsListId)
	{
		$request = Request::delete("{$this->getCompanyId()}/recipients-lists/{$recipientsListId}");
		$this->getConnector()->sendRequest($request);
	}


	/**
	 *
	 * @param int $email
	 * @return RecipientsListsEntity
	 */
	public function getRecipientsLists($email = null)
	{
		$parameters = null;
		if ($email != null) {
			$parameters = [
				'email' => $email,
			];
		}
		$request = Request::get("{$this->getCompanyId()}/recipients-lists", $parameters);
		$response = $this->getConnector()->sendRequest($request);
		$data = Json::decode($response->getContent());
		$json = new stdClass();
		$json->recipientsLists = $data;
		return new RecipientsListsEntity($json);
	}


	/**
	 *
	 * @param int $recipientsListId
	 * @return RecipientsListEntity
	 */
	public function getRecipientsList($recipientsListId)
	{
		$request = Request::get("{$this->getCompanyId()}/recipients-lists/{$recipientsListId}");
		$response = $this->getConnector()->sendRequest($request);
		return new RecipientsListEntity($response->getContent());
	}

}
