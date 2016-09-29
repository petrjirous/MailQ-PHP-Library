<?php

namespace MailQ\Entities\v2;

use MailQ\Entities\BaseEntity;

class UsersEntity extends BaseEntity
{

	/**
	 * @in
	 * @out
	 * @var UserEntity
	 * @collection
	 */
	private $users;

	/**
	 * @return UserEntity
	 */
	public function getUsers()
	{
		return $this->users;
	}

	/**
	 * @param UserEntity $users
	 * @return UsersEntity
	 */
	public function setUsers($users)
	{
		$this->users = $users;
		return $this;
	}


}
