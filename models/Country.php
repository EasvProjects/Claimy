<?php

class Country
{
    protected $countryID;
    protected $country;


    public function __construct()
    {

    }


    /**
     * @param mixed $countryID
     */
    public function setCountryID($countryID): void
    {
        $this->countryID= $countryID;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country): void
    {
        $this->country = $country;
    }

    /**
     * @return mixed $countryID
     */
    public function getCountryID()
    {
        return $this->countryID;
    }

    /**
     * @return mixed $country
     */
    public function getCountry()
    {
        return $this->country;
    }


}