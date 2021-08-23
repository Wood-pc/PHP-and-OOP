<?php

namespace Deadman;


class Admin extends User
{
    public function fullName()
    {
        echo 'Všemocný '. ucfirst( $this->first_name ).' '. ucfirst( $this->last_name );
    }

    public function destroyEverything()
    {
        echo 'Prečo to chceš vymazať? :(';
    }
}

