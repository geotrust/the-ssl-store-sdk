<?php
/**
 * Created by IntelliJ IDEA.
 * User: nikolayyotsov
 * Date: 7/19/17
 * Time: 4:32 PM
 */

namespace SslStoreSdk\Request\Order;

use SslStoreSdk\Core\BaseRequest;
use SslStoreSdk\Core\Contact;
use SslStoreSdk\Core\OrganizationAddress;
use SslStoreSdk\Core\OrganizationInfo;
use SslStoreSdk\Core\WebServerTypeValidator;

class NewOrder extends BaseRequest
{
    use WebServerTypeValidator;

    public function __construct($args = [])
    {
        $this->OrganizationInfo                      = new OrganizationInfo();
        $this->OrganizationInfo->OrganizationAddress = new OrganizationAddress(
        );
        $this->AdminContact                          = new Contact();
        $this->TechnicalContact                      = new Contact();

        self::validateWebServerType($args);

        parent::__construct($args);
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
    public $CertTransparencyIndicator;
    public $RenewalDays;
    public $DateTimeCulture;
    public $CSRUniqueValue;
}
