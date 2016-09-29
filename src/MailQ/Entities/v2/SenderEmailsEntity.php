<?php

namespace MailQ\Entities\v2;

use MailQ\Entities\BaseEntity;

class SenderEmailsEntity extends BaseEntity
{


	/**
	 *
	 * @in
	 * @out
	 * @var SenderEmailEntity
	 * @collection
	 */
	private $emails;

	/**
	 * @return SenderEmailEntity
	 */
	public function getEmails()
	{
		return $this->emails;
	}

	/**
	 * @param SenderEmailEntity $emails
	 * @return SenderEmailsEntity
	 */
	public function setEmails($emails)
	{
		$this->emails = $emails;
		return $this;
	}
   

}
