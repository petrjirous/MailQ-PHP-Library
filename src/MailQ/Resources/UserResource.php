<?php

namespace MailQ\Resources;

use MailQ\Entities\v2\UserEntity;
use MailQ\Entities\v2\UsersEntity;
use MailQ\Request;
use Nette\Utils\Json;
use stdClass;

trait UserResource
{


	/**
	 * @return UsersEntity
	 */
	public function getUsers()
	{
		$request = Request::get("{$this->getCompanyId()}/users");
		$response = $this->getConnector()->sendRequest($request);
		$data = Json::decode($response->getContent());
		$json = new stdClass();
		$json->users = $data;
		return new UsersEntity($json);
	}


	/**
	 *
	 * @param int $userId
	 * @return UserEntity
	 */
	public function getUser($userId)
	{
		$request = Request::get("{$this->getCompanyId()}/users/{$userId}");
		$response = $this->getConnector()->sendRequest($request);
		return new UserEntity($response->getContent());
	}

}
