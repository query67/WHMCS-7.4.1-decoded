<?php 

class Transip_Tld
{
    public $name = NULL;
    public $price = NULL;
    public $renewalPrice = NULL;
    public $capabilities = NULL;
    public $registrationPeriodLength = NULL;
    public $cancelTimeFrame = NULL;

    const CAPABILITY_REQUIRESAUTHCODE = "requiresAuthCode";
    const CAPABILITY_CANREGISTER = "canRegister";
    const CAPABILITY_CANTRANSFERWITHOWNERCHANGE = "canTransferWithOwnerChange";
    const CAPABILITY_CANTRANSFERWITHOUTOWNERCHANGE = "canTransferWithoutOwnerChange";
    const CAPABILITY_CANSETLOCK = "canSetLock";
    const CAPABILITY_CANSETOWNER = "canSetOwner";
    const CAPABILITY_CANSETCONTACTS = "canSetContacts";
    const CAPABILITY_CANSETNAMESERVERS = "canSetNameservers";

}


