<?php

namespace MailQ\Entities\v2;

use MailQ\Entities\BaseEntity;

class UserEntity extends BaseEntity{
    
    /**
     * 
     * "id": 1, 
        "username": "john.snow@gmail.com",
        "forename": "John",
        "surname": "Snow",
        "phone": "134-567-891",
        "email": "js@company.com",
        "position": "Manager",
        "testEmail": "john.test@gmail.com",
        "companies": [
            {
                "id": 1,
                "link": "https://www.mailq.quanti.cz/api/v2/companies/1"
            },
            {
                "id": 2,
                "link": "https://www.mailq.quanti.cz/api/v2/companies/2"
            }
        ]
     */
    
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
    private $username;
    /**
     * @in
     * @out
     * @var string 
     */
    private $surname;
    /**
     * @in
     * @out
     * @var string 
     */
    private $phone;
    /**
     * @in
     * @out
     * @var string 
     */
    private $email;
    /**
     * @in
     * @out
     * @var string 
     */
    private $position;
    /**
     * @in
     * @out
     * @var string 
     */
    private $testEmail;
    /**
     * @in
     * @out
     * @var LinkEntity
     * @collection 
     */
    private $companies;
    
    function getId() {
        return $this->id;
    }

    function getUsername() {
        return $this->username;
    }

    function getSurname() {
        return $this->surname;
    }

    function getPhone() {
        return $this->phone;
    }

    function getEmail() {
        return $this->email;
    }

    function getPosition() {
        return $this->position;
    }

    function getTestEmail() {
        return $this->testEmail;
    }

    function getCompanies() {
        return $this->companies;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function setSurname($surname) {
        $this->surname = $surname;
    }

    function setPhone($phone) {
        $this->phone = $phone;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPosition($position) {
        $this->position = $position;
    }

    function setTestEmail($testEmail) {
        $this->testEmail = $testEmail;
    }

    function setCompanies($companies) {
        $this->companies = $companies;
    }



    
}
