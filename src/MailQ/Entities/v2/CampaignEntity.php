<?php

namespace MailQ\Entities\v2;

use MailQ\Entities\BaseEntity;

class CampaignEntity extends BaseEntity {

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
    

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getCreated() {
        return $this->created->format('Y-m-d\TH:i:s.u');
    }
	
	public function getCreatedAsDateTime() {
        return $this->created;
    }

    public function getCompany() {
        return $this->company;
    }

    public function getNewsletters() {
        return $this->newsletters;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setCreated($created) {
        if (is_string($created)) {
            $this->created = \DateTime::createFromFormat('Y-m-d\TH:i:s.u', $created);
        } elseif ($created instanceof \DateTime) {
            $this->created = $created;
        }
    }

    public function setCompany(LinkEntity $company) {
        $this->company = $company;
    }

    public function setNewsletters($newsletters) {
        $this->newsletters = $newsletters;
    }






}
