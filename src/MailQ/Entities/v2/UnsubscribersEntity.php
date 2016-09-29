<?php

namespace MailQ\Entities\v2;

use MailQ\Entities\BaseEntity;

class UnsubscribersEntity extends BaseEntity
{

	/**
	 * @in
	 * @out
	 * @var UnsubscriberEntity
	 * @collection
	 */
	private $unsubscribers;

	/**
	 * @return UnsubscriberEntity
	 */
	public function getUnsubscribers()
	{
		return $this->unsubscribers;
	}

	/**
	 * @param UnsubscriberEntity $unsubscribers
	 * @return UnsubscribersEntity
	 */
	public function setUnsubscribers($unsubscribers)
	{
		$this->unsubscribers = $unsubscribers;
		return $this;
	}


}
