<?php

class Users
{

    protected $userID;
    protected $type;
    protected $userTitle;
    protected $userName;
    protected $userEmail;
    protected $signupTimeDate;
    protected $lastActionTimeDate;
    protected $userAddress;
    protected $userCountry;

    /**
     * Users constructor.
     * @param $userID
     * @param $type
     * @param $userTitle
     * @param $userName
     * @param $userEmail
     * @param $signupTimeDate
     * @param $lastActionTimeDate
     * @param $userAddress
     * @param $userCountry
     */
    public function __construct($userID, $type, $userTitle, $userName, $userEmail, $signupTimeDate, $lastActionTimeDate, $userAddress, $userCountry)
    {
        $this->userID = $userID;
        $this->type = $type;
        $this->userTitle = $userTitle;
        $this->userName = $userName;
        $this->userEmail = $userEmail;
        $this->signupTimeDate = $signupTimeDate;
        $this->lastActionTimeDate = $lastActionTimeDate;
        $this->userAddress = $userAddress;
        $this->userCountry = $userCountry;
    }

    /**
     * @return mixed
     */
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     * @param mixed $userID
     */
    public function setUserID($userID)
    {
        $this->userID = $userID;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getUserTitle()
    {
        return $this->userTitle;
    }

    /**
     * @param mixed $userTitle
     */
    public function setUserTitle($userTitle)
    {
        $this->userTitle = $userTitle;
    }

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param mixed $userName
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
    }

    /**
     * @return mixed
     */
    public function getUserEmail()
    {
        return $this->userEmail;
    }

    /**
     * @param mixed $userEmail
     */
    public function setUserEmail($userEmail)
    {
        $this->userEmail = $userEmail;
    }

    /**
     * @return mixed
     */
    public function getSignupTimeDate()
    {
        return $this->signupTimeDate;
    }

    /**
     * @param mixed $signupTimeDate
     */
    public function setSignupTimeDate($signupTimeDate)
    {
        $this->signupTimeDate = $signupTimeDate;
    }

    /**
     * @return mixed
     */
    public function getLastActionTimeDate()
    {
        return $this->lastActionTimeDate;
    }

    /**
     * @param mixed $lastActionTimeDate
     */
    public function setLastActionTimeDate($lastActionTimeDate)
    {
        $this->lastActionTimeDate = $lastActionTimeDate;
    }

    /**
     * @return mixed
     */
    public function getUserAddress()
    {
        return $this->userAddress;
    }

    /**
     * @param mixed $userAddress
     */
    public function setUserAddress($userAddress)
    {
        $this->userAddress = $userAddress;
    }

    /**
     * @return mixed
     */
    public function getUserCountry()
    {
        return $this->userCountry;
    }

    /**
     * @param mixed $userCountry
     */
    public function setUserCountry($userCountry)
    {
        $this->userCountry = $userCountry;
    }

}
