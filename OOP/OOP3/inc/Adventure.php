<?php


class Adventure
{
    protected $dudes = [];

    /**
     * @return array
     */
    public function getDudes()
    {
        return $this->dudes;
    }


    public function addDude( Dude $dude )
    {
        array_push( $this->dudes, $dude );
    }


    public function dudeCount()
    {
        return count( $this->dudes );
    }

    public function commentsCount()
    {
        $count = 0;

        foreach ( $this->dudes as $dude )
        {
            $count += $dude->commentCount();
        }
        return $count;
    }

    public function getDude( $id )
    {
        var_dump( $this->dudes[$id]);
    }

    public function removeDude( $id )
    {
        array_splice( $this->dudes, $id, 1);
    }

    public function editDude( $id, $who, $wat)
    {
        $this->dudes[$id]->setWho($who);
        $this->dudes[$id]->setWat($wat);
    }

}