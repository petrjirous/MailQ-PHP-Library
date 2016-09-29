<?php

namespace MailQ\Entities\v2;

use MailQ\Entities\BaseEntity;

class RecipientsListsEntity extends BaseEntity
{


	/**
	 * @in
	 * @out
	 * @var RecipientsListEntity
	 * @collection
	 */
	private $recipientsLists;

	/**
	 * @return RecipientsListEntity
	 */
	public function getRecipientsLists()
	{
		return $this->recipientsLists;
	}

	/**
	 * @param RecipientsListEntity $recipientsLists
	 * @return RecipientsListsEntity
	 */
	public function setRecipientsLists($recipientsLists)
	{
		$this->recipientsLists = $recipientsLists;
		return $this;
	}

    
}
