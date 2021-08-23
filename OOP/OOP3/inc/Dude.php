<?php


class Dude
{
    protected $who;
    protected $wat;
    protected $comments = [];

    /**
     * Dude constructor.
     * @param $who
     * @param $wat
     * @param array $comments
     */
    public function __construct($who, $wat, array $comments)
    {
        $this->who = $who;
        $this->wat = $wat;
        $this->comments = $comments;
    }


    /**
     * @return mixed
     */
    public function getWho()
    {
        return $this->who;
    }

    /**
     * @param mixed $who
     */
    public function setWho($who)
    {
        $this->who = $who;
    }

    /**
     * @return mixed
     */
    public function getWat()
    {
        return $this->wat;
    }

    /**
     * @param mixed $wat
     */
    public function setWat($wat)
    {
        $this->wat = $wat;
    }

    /**
     * @return array
     */
    public function getComments()
    {
        foreach ( $this->comments as $comment )
        {
            echo $comment;
        }
    }

    /**
     * @param array $comments
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
    }


    public function addComment( $comment )
    {
        array_push( $this->comments, $comment);
    }


    public function commentCount()
    {
        return count( $this->comments );
    }

}

