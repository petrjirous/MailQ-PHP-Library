<?php

namespace MailQ\Entities\v2;

use MailQ\Entities\BaseEntity;

class CampaignsEntity extends BaseEntity {

    /**
     * @in
     * @out
     * @var CampaignEntity 
     * @collection
     */
    private $campaigns;
   
    public function getCampaigns() {
        return $this->campaigns;
    }

    public function setCampaigns($campaigns) {
        $this->campaigns = $campaigns;
    }


}