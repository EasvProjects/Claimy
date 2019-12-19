<?php

class Claim
{
    protected $claimID;
    protected $customerEmail;
    protected $reasonID;
    protected $ticketNo;
    protected $ticketDueDate;
    protected $ticketFee;
    protected $ticketStreetName;
    protected $zipCode;
    protected $carRegNo;
    protected static $claimArray = [] ;


    public function __construct($claimID, $reasonID,
                                $ticketNo,$ticketDueDate, $ticketFee, $ticketStreetName, $zipcode,
                                $carRegNo)
    {
        $this->claimID = $claimID;
        $this->reasonID = $reasonID;
        $this->ticketNo = $ticketNo;
        $this->ticketDueDate = $ticketDueDate;
        $this->ticketFee = $ticketFee;
        $this->ticketStreetName = $ticketStreetName;
        $this->zipCode = $zipcode;
        $this->carRegNo= $carRegNo;
    }

    /**
     * @param array $claimArray
     */
    public static function setClaimArray(array $claimArray)
    {
        self::$claimArray = $claimArray;
    }

    /**
     * @return array
     */
    public static function getClaimArray()
    {
        return self::$claimArray;
    }


    /**
     * @param mixed $claimID
     */
    public function setClaimID($claimID): void
    {
        $this->claimID = $claimID;
    }

    /**
     * @param mixed $customerEmail
     */
    public function setEmail($customerEmail): void
    {
        $this->customerEmail = $customerEmail;
    }



    /**
     * @param mixed $reasonID
     */
    public function setReasonID($reasonID): void
    {
        $this->reasonID = $reasonID;
    }

    /**
     * @param mixed $ticketNo
     */
    public function setTicketNo($ticketNo): void
    {
        $this->ticketNo = $ticketNo;
    }


    /**
     * @param mixed $ticketFee
     */
    public function setTicketFee($ticketFee): void
    {
        $this->ticketFee = $ticketFee;
    }

    /**
     * @param mixed $ticketDueDate
     */
    public function setTicketDueDate($ticketDueDate): void
    {
        $this->ticketDueDate = $ticketDueDate;
    }

    /**
     * @param mixed $ticketStreetName
     */
    public function setTicketStreetName($ticketStreetName): void
    {
        $this->ticketStreetName = $ticketStreetName;
    }


    /**
     * @param mixed $zipCode
     */
    public function setZipCode($zipCode): void
    {
        $this->zipCode = $zipCode;
    }

    /**
     * @param mixed $licensePlate
     */
    public function setCarRegNo($carRegNo): void
    {
        $this->carRegNo = $carRegNo;
    }

    /**
     * @return mixed
     */
    public function getClaimID()
    {
        return $this->claimID;
    }

    /**
     * @return mixed
     */
    public function getCustomerEmail()
    {
        return $this->customerEmail;
    }

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
    public function getTicketDueDate()
    {
        return $this->ticketDueDate;
    }

    /**
     * @return mixed
     */
    public function getTicketNo()
    {
        return $this->ticketNo;
    }


    /**
     * @return mixed
     */
    public function getTicketFee()
    {
        return $this->ticketFee;
    }

    /**
     * @return mixed
     */
    public function getTicketStreetName()
    {
        return $this->ticketStreetName;
    }

    /**
     * @return mixed
     */
    public function getCarRegNo()
    {
        return $this->carRegNo;
    }

    /**
     * @return mixed
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }



}