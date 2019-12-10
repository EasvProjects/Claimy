<?php

class Claim
{
    protected $claimID;
    protected $claimTimeDate;
    protected $userID;
    protected $countryID;
    protected $parkingCompany;
    protected $reasonID;
    protected $ticketNo;
    protected $ticketTimeDate;
    protected $ticketDueDate;
    protected $ticketFee;
    protected $ticketStreetName;
    protected $zipCode;
    protected $licensePlate;
    protected $carBrand;
    protected $carModel;
    protected $claimComment;


    public function __construct($claimID, $claimTimeDate, $userID, $countryID, $parkingCompany, $reasonID,
                                $ticketNo, $ticketTimeDate, $ticketDueDate, $ticketFee, $ticketStreetName, $zipcode,
                                $licensePlate, $carBrand, $carModel, $claimComment)
    {
        $this->claimID = $claimID;
        $this->claimTimeDate = $claimTimeDate;
        $this->userID = $userID;
        $this->countryID = $countryID;
        $this->parkingCompany = $parkingCompany;
        $this->reasonID = $reasonID;
        $this->ticketNo = $ticketNo;
        $this->ticketTimeDate = $ticketTimeDate;
        $this->ticketDueDate = $ticketDueDate;
        $this->ticketFee = $ticketFee;
        $this->ticketStreetName = $ticketStreetName;
        $this->zipCode = $zipcode;
        $this->licensePlate = $licensePlate;
        $this->carBrand = $carBrand;
        $this->carModel = $carModel;
        $this->claimComment = $claimComment;
    }


}