<?php
/**
 * Created by IntelliJ IDEA.
 * User: nikolayyotsov
 * Date: 7/19/17
 * Time: 4:30 PM
 */

namespace SslStoreSdk\Request;

use SslStoreSdk\Core\BaseRequest;
use SslStoreSdk\Core\Contact;
use SslStoreSdk\Core\OrganizationAddress;
use SslStoreSdk\Core\OrganizationInfo;

class FreeCuinfo extends BaseRequest
{
    public function __construct()
    {
        $this->OrganizationInfo                      = new OrganizationInfo();
        $this->OrganizationInfo->OrganizationAddress = new OrganizationAddress(
        );
        $this->AdminContact                          = new Contact();
        $this->TechnicalContact                      = new Contact();
        parent::__construct();
    }

    public $CustomOrderID;
    public $ProductCode;
    public $ExtraProductCodes;
    public $OrganizationInfo;
    public $ValidityPeriod;
    public $ServerCount;
    public $CSR;
    public $DomainName;
    public $WebServerType;
    public $DNSNames;
    public $isCUOrder;
    public $isRenewalOrder;
    public $SpecialInstructions;
    public $RelatedTheSSLStoreOrderID;
    public $isTrialOrder;
    public $AdminContact;
    public $TechnicalContact;
    public $ApproverEmail;
    public $ReserveSANCount;
    public $AddInstallationSupport;
    public $EmailLanguageCode;
    public $FileAuthDVIndicator;
    public $CNAMEAuthDVIndicator;
    public $HTTPSFileAuthDVIndicator;
    public $SignatureHashAlgorithm;
}
