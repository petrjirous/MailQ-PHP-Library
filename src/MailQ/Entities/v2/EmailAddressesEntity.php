<?php

namespace MailQ\Entities\v2;

use MailQ\Entities\BaseEntity;

class EmailAddressesEntity extends BaseEntity
{

	/**
	 * @in
	 * @out
	 * @var EmailAddressEntity
	 * @collection
	 */
	private $emails = [];

	/**
	 * @return EmailAddressEntity
	 */
	public function getEmails()
	{
		return $this->emails;
	}

	/**
	 * @param EmailAddressEntity $emails
	 * @return EmailAddressesEntity
	 */
	public function setEmails($emails)
	{
		$this->emails = $emails;
		return $this;
	}


	/**
	 * @param EmailAddressEntity $email
	 * @return $this
	 */
	public function addEmail(EmailAddressEntity $email)
	{
		$this->emails[] = $email;
		return $this;
	}


}
