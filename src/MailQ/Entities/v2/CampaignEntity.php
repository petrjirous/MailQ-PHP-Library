<?php

namespace MailQ\Entities\v2;

use MailQ\Entities\BaseEntity;

class CampaignEntity extends BaseEntity
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
	private $name;

	/**
	 * @in
	 * @out
	 * @var \DateTime
	 */
	private $created;

	/**
	 * @in
	 * @out
	 * @var LinkEntity
	 */
	private $company;

	/**
	 * @in
	 * @out
	 * @var LinkEntity
	 * @collection
	 */
	private $newsletters;


	/**
	 * @return null|string
	 */
	public function getCreated()
	{
		if ($this->created != null) {
			return $this->created->format('Y-m-d\TH:i:s.u');
		} else {
			return null;
		}
	}

	/**
	 * @param $created
	 * @return $this
	 */
	public function setCreated($created)
	{
		if (is_string($created)) {
			$this->created = \DateTime::createFromFormat('Y-m-d\TH:i:s.u', $created);
		} elseif ($created instanceof \DateTime) {
			$this->created = $created;
		}
		return $this;
	}

	/**
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param int $id
	 * @return CampaignEntity
	 */
	public function setId($id)
	{
		$this->id = $id;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @param string $name
	 * @return CampaignEntity
	 */
	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}

	/**
	 * @return LinkEntity
	 */
	public function getCompany()
	{
		return $this->company;
	}

	/**
	 * @param LinkEntity $company
	 * @return CampaignEntity
	 */
	public function setCompany($company)
	{
		$this->company = $company;
		return $this;
	}

	/**
	 * @return LinkEntity
	 */
	public function getNewsletters()
	{
		return $this->newsletters;
	}

	/**
	 * @param LinkEntity $newsletters
	 * @return CampaignEntity
	 */
	public function setNewsletters($newsletters)
	{
		$this->newsletters = $newsletters;
		return $this;
	}


}
