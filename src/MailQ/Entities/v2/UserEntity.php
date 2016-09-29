<?php

namespace MailQ\Entities\v2;

use MailQ\Entities\BaseEntity;

class UserEntity extends BaseEntity
{


	/**
	 * @in
	 * @out
	 * @var integer
	 */
	private $id;

	/**
	 * @in
	 * @out
	 * @var string
	 */
	private $username;

	/**
	 * @in
	 * @out
	 * @var string
	 */
	private $surname;

	/**
	 * @in
	 * @out
	 * @var string
	 */
	private $phone;

	/**
	 * @in
	 * @out
	 * @var string
	 */
	private $email;

	/**
	 * @in
	 * @out
	 * @var string
	 */
	private $position;

	/**
	 * @in
	 * @out
	 * @var string
	 */
	private $testEmail;

	/**
	 * @in
	 * @out
	 * @var LinkEntity
	 * @collection
	 */
	private $companies;

	/**
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param int $id
	 * @return UserEntity
	 */
	public function setId($id)
	{
		$this->id = $id;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getUsername()
	{
		return $this->username;
	}

	/**
	 * @param string $username
	 * @return UserEntity
	 */
	public function setUsername($username)
	{
		$this->username = $username;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getSurname()
	{
		return $this->surname;
	}

	/**
	 * @param string $surname
	 * @return UserEntity
	 */
	public function setSurname($surname)
	{
		$this->surname = $surname;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getPhone()
	{
		return $this->phone;
	}

	/**
	 * @param string $phone
	 * @return UserEntity
	 */
	public function setPhone($phone)
	{
		$this->phone = $phone;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getEmail()
	{
		return $this->email;
	}

	/**
	 * @param string $email
	 * @return UserEntity
	 */
	public function setEmail($email)
	{
		$this->email = $email;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getPosition()
	{
		return $this->position;
	}

	/**
	 * @param string $position
	 * @return UserEntity
	 */
	public function setPosition($position)
	{
		$this->position = $position;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getTestEmail()
	{
		return $this->testEmail;
	}

	/**
	 * @param string $testEmail
	 * @return UserEntity
	 */
	public function setTestEmail($testEmail)
	{
		$this->testEmail = $testEmail;
		return $this;
	}

	/**
	 * @return LinkEntity
	 */
	public function getCompanies()
	{
		return $this->companies;
	}

	/**
	 * @param LinkEntity $companies
	 * @return UserEntity
	 */
	public function setCompanies($companies)
	{
		$this->companies = $companies;
		return $this;
	}


}
