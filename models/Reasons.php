<?php


class Reasons
{
    protected $reasonName;
    protected $reasonID;

    /**
     * @return mixed
     */
    public function getReasonID()
    {
        return $this->reasonID;
    }

    /**
     * @return mixed
     */
    public function getReasonName()
    {
        return $this->reasonName;
    }

    /**
     * @param mixed $reasonID
     */
    public function setReasonID($reasonID)
    {
        $this->reasonID = $reasonID;
    }

    /**
     * @param mixed $reasonName
     */
    public function setReasonName($reasonName)
    {
        $this->reasonName = $reasonName;
    }

}