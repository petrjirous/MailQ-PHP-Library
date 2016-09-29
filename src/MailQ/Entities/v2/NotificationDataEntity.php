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
     * @var string
     */
    private $replyToEmail;
    /**
     * @in
     * @out
     * @var array
     */
    private $bcc;
    /**
     * @in
     * @out
     * @var array
     */
    private $cc;
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

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return NotificationDataEntity
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getOpenedTimestamp()
    {
        return $this->openedTimestamp;
    }

    /**
     * @param int $openedTimestamp
     * @return NotificationDataEntity
     */
    public function setOpenedTimestamp($openedTimestamp)
    {
        $this->openedTimestamp = $openedTimestamp;
        return $this;
    }

    /**
     * @return int
     */
    public function getUndeliveredTimestamp()
    {
        return $this->undeliveredTimestamp;
    }

    /**
     * @param int $undeliveredTimestamp
     * @return NotificationDataEntity
     */
    public function setUndeliveredTimestamp($undeliveredTimestamp)
    {
        $this->undeliveredTimestamp = $undeliveredTimestamp;
        return $this;
    }

    /**
     * @return int
     */
    public function getUnsubscribedTimestamp()
    {
        return $this->unsubscribedTimestamp;
    }

    /**
     * @param int $unsubscribedTimestamp
     * @return NotificationDataEntity
     */
    public function setUnsubscribedTimestamp($unsubscribedTimestamp)
    {
        $this->unsubscribedTimestamp = $unsubscribedTimestamp;
        return $this;
    }

    /**
     * @return string
     */
    public function getRecipientEmail()
    {
        return $this->recipientEmail;
    }

    /**
     * @param string $recipientEmail
     * @return NotificationDataEntity
     */
    public function setRecipientEmail($recipientEmail)
    {
        $this->recipientEmail = $recipientEmail;
        return $this;
    }

    /**
     * @return string
     */
    public function getReplyToEmail()
    {
        return $this->replyToEmail;
    }

    /**
     * @param string $replyToEmail
     * @return NotificationDataEntity
     */
    public function setReplyToEmail($replyToEmail)
    {
        $this->replyToEmail = $replyToEmail;
        return $this;
    }

    /**
     * @return array
     */
    public function getBcc()
    {
        return $this->bcc;
    }

    /**
     * @param array $bcc
     * @return NotificationDataEntity
     */
    public function setBcc($bcc)
    {
        $this->bcc = $bcc;
        return $this;
    }

    /**
     * @return array
     */
    public function getCc()
    {
        return $this->cc;
    }

    /**
     * @param array $cc
     * @return NotificationDataEntity
     */
    public function setCc($cc)
    {
        $this->cc = $cc;
        return $this;
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param array $data
     * @return NotificationDataEntity
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @return AttachmentEntity
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * @param AttachmentEntity $attachments
     * @return NotificationDataEntity
     */
    public function setAttachments($attachments)
    {
        $this->attachments = $attachments;
        return $this;
    }



    
    
    

    


}
