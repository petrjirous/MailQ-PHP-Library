<?php

namespace MailQ\Entities\v2;

use MailQ\Entities\BaseEntity;

class SmsBatchResultEntity extends BaseEntity
{


	/**
	 * @in
	 * @out
	 * @var SmsResultEntity
	 * @collection
	 */
	private $results;

	/**
	 * @return SmsResultEntity
	 */
	public function getResults()
	{
		return $this->results;
	}

	/**
	 * @param SmsResultEntity $results
	 * @return SmsBatchResultEntity
	 */
	public function setResults($results)
	{
		$this->results = $results;
		return $this;
	}


}
