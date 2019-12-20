<?php

class Countries
{

    protected $countryID;
    protected $countryName;

    /**
     * Countries constructor.
     * @param $countryID
     * @param $countryName
     */
    public function __construct($countryID, $countryName)
    {
        $this->countryID = $countryID;
        $this->countryName = $countryName;
    }

    /**
     * @return mixed
     */
    public function getCountryID()
    {
        return $this->countryID;
    }

    /**
     * @param mixed $countryID
     */
    public function setCountryID($countryID)
    {
        $this->countryID = $countryID;
    }

    /**
     * @return mixed
     */
    public function getCountryName()
    {
        return $this->countryName;
    }

    /**
     * @param mixed $countryName
     */
    public function setCountryName($countryName)
    {
        $this->countryName = $countryName;
    }

}