<?php

namespace Deadman;


class User
{
    public $first_name;
    public $last_name;
    public $email;
    public $avatar;

    /**
     * User constructor.
     * @param $first_name
     * @param $last_name
     * @param $email
     * @param $avatar
     */
    public function __construct($first_name, $last_name, $email, $avatar)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->avatar = $avatar;
    }


    public function setFirstName($firstName = false)
    {
        if( $firstName )
        {
            $this->first_name = $firstName;
        }
    }

    public function firstName()
    {
        echo ucfirst( $this->first_name );
    }

    public function setLastName($lastName = false)
    {
        if( $lastName )
        {
            $this->last_name = $lastName;
        }
    }

    public function lastName()
    {
        echo ucfirst( $this->last_name );
    }

    public function fullName()
    {
        echo ucfirst( $this->first_name ).' '. ucfirst( $this->last_name );
    }

    public function setEmail($email = false)
    {
        if( $email )
        {
            $this->email = $email;
        }
    }

    public function email()
    {
        echo $this->email;
    }

    public function setAvatar($avatar = false)
    {
        if( $avatar )
        {
            $this->avatar = $avatar;
        }
    }

    public function avatar()
    {
        echo $this->avatar;
    }

}






