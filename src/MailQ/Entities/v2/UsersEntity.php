<?php

namespace MailQ\Entities\v2;

use MailQ\Entities\BaseEntity;

class UsersEntity extends BaseEntity{
    
    /**
     * @in
     * @out
     * @var UserEntity
     * @collection
     */
    private $users;
    
    
    function getUsers() {
        return $this->users;
    }

    function setUsers($users) {
        $this->users = $users;
    }




    
}
