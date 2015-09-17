<?php

namespace MailQ\Entities\v2;

use MailQ\Entities\BaseEntity;

class NotificationDataEntity extends BaseEntity {

   
    /**
     * @in
     * @out
     * @var integer 
     */
    private $id;
    /**
     * @in
     * @out
     * @var integer 
     */
    private $openedTimestamp;
    /**
     * @in
     * @out
     * @var integer 
     */
    private $undeliveredTimestamp;
    /**
     * @in
     * @out
     * @var integer 
     */
    private $unsubscribedTimestamp;
    /**
     * @in
     * @out
     * @var string 
     */
    private $recipientEmail;
    /**
     * @in
     * @out
     * @var array 
     */
    private $data;
    /**
     * @in
     * @out
     * @var AttachmentEntity
     * @collection 
     */
    private $attachments;



    public function getRecipientEmail() {
        return $this->recipientEmail;
    }

    public function getData() {
        return $this->data;
    }

    public function getAttachments() {
        return $this->attachments;
    }

    public function setRecipientEmail($recipientEmail) {
        $this->recipientEmail = $recipientEmail;
    }

    public function setData($data) {
        $this->data = $data;
    }

    public function setAttachments($attachments) {
        $this->attachments = $attachments;
    }

    public function getId() {
        return $this->id;
    }

    public function getOpenedTimestamp() {
        return $this->openedTimestamp;
    }

    public function getUndeliveredTimestamp() {
        return $this->undeliveredTimestamp;
    }

    public function getUnsubscribedTimestamp() {
        return $this->unsubscribedTimestamp;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setOpenedTimestamp($openedTimestamp) {
        $this->openedTimestamp = $openedTimestamp;
    }

    public function setUndeliveredTimestamp($undeliveredTimestamp) {
        $this->undeliveredTimestamp = $undeliveredTimestamp;
    }

    public function setUnsubscribedTimestamp($unsubscribedTimestamp) {
        $this->unsubscribedTimestamp = $unsubscribedTimestamp;
    }



}
