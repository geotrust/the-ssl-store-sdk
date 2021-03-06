<?php
/**
 * Created by IntelliJ IDEA.
 * User: nikolayyotsov
 * Date: 7/19/17
 * Time: 5:47 PM
 */

namespace SslStoreSdk\Response\Order;


use SslStoreSdk\Core\BaseResponse;
use SslStoreSdk\Core\Contact;
use SslStoreSdk\Core\OrderStatus;

class Query extends BaseResponse
{
    public function __construct()
    {
        $this->OrderStatus      = new OrderStatus();
        $this->AdminContact     = new Contact();
        $this->TechnicalContact = new Contact();
        parent::__construct();
    }

    public $PartnerOrderID;
    public $CustomOrderID;
    public $TheSSLStoreOrderID;
    public $VendorOrderID;
    public $RefundRequestID;
    public $isRefundApproved;
    public $TinyOrderLink;
    public $OrderStatus;
    public $OrderAmount;
    public $PurchaseDate;
    public $CertificateStartDate;
    public $CertificateEndDate;
    public $CommonName;
    public $DNSNames;
    public $SANCount;
    public $ServerCount;
    public $Validity;
    public $Organization;
    public $OrganizationalUnit;
    public $State;
    public $Country;
    public $Locality;
    public $OrganizationPhone;
    public $OrganizationAddress;
    public $OrganizationPostalcode;
    public $DUNS;
    public $WebServerType;
    public $ApproverEmail;
    public $ProductName;
    public $AdminContact;
    public $TechnicalContact;
    public $ReissueSuccessCode;
    public $AuthFileName;
    public $AuthFileContent;
    public $PollStatus;
    public $PollDate;
    public $CustomerLoginName;
    public $CustomerPassword;
    public $CustomerID;
    public $TokenID;
    public $TokenCode;
    public $SiteSealurl;
    public $CNAMEAuthName;
    public $CNAMEAuthValue;
    public $SignatureEncryptionAlgorithm;
    public $SignatureHashAlgorithm;
    public $VendorName;
    public $SubVendorName;
    public $Token;
    public $SerialNumber;
    public $CertificateStartDateInUTC;
    public $CertificateEndDateInUTC;
    public $PurchaseDateInUTC;
    public $PollDateInUTC;
}
