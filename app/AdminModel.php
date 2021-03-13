<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// commit from Afshan Again
// Change System Admin First Time
// commit from Afshan
// comment for pull reqsfgfd
class AdminModel extends Model
{
    private $firstName, $lastName, $email, $password, $phonoNumber;

    public function getFirstName()
    {
        return $this->firstName;
    }
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }
    public function getLastName()
    {
        return $this->lastName;
    }
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function getPhonoNumber()
    {
        return $this->phonoNumber;
    }
    public function setPhonoNumber($phonoNumber)
    {
        $this->phonoNumber = $phonoNumber;
    }
    public function getName()
    {
        return $this->firstName . " " . $this->lastName;
    }
    public function jsonSerialize()
    {
        return
            [
                'name'        => $this->getName(),
                'email'       => $this->getEmail(),
                'phoneNumber' => $this->getPhonoNumber(),
                'password'    => $this->getPassword()
            ];
    }
    public function loginJsonSerialize(){
        return 
        [
            'email'       => $this->getEmail(),
            'password'    => $this->getPassword()
        ];
    }
}
