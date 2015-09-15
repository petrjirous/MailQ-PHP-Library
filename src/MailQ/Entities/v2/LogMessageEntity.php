<?php

namespace MailQ\Entities\v2;

use MailQ\Entities\BaseEntity;

class LogMessageEntity extends BaseEntity{
    
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
    private $title;
    /**
     * @in
     * @out
     * @var string
     */
    private $text;
    /**
     * @in
     * @out
     * @var string
     */
    private $type;
    /**
     * @in
     * @out
     * @var string
     */
    private $created;
    /**
     * @in
     * @out
     * @var LinkEntity
     */
    private $company;
    
    
    function getId() {
        return $this->id;
    }

    function getTitle() {
        return $this->title;
    }

    function getText() {
        return $this->text;
    }

    function getType() {
        return $this->type;
    }

    function getCreated() {
        return $this->created;
    }

    function getCompany() {
        return $this->company;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTitle($title) {
        $this->title = $title;
    }

    function setText($text) {
        $this->text = $text;
    }

    function setType($type) {
        $this->type = $type;
    }

    function setCreated($created) {
        $this->created = $created;
    }

    function setCompany(LinkEntity $company) {
        $this->company = $company;
    }

}
