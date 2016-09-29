<?php

namespace MailQ\Entities\v2;

use MailQ\Entities\BaseEntity;

class NewslettersEntity extends BaseEntity
{


	/**
	 * @in
	 * @out
	 * @var NewsletterEntity
	 * @collection
	 */
	private $newsletters;

	/**
	 * @return NewsletterEntity
	 */
	public function getNewsletters()
	{
		return $this->newsletters;
	}

	/**
	 * @param NewsletterEntity $newsletters
	 * @return NewslettersEntity
	 */
	public function setNewsletters($newsletters)
	{
		$this->newsletters = $newsletters;
		return $this;
	}
   

}
