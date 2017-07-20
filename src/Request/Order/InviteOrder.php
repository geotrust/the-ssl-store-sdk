<?php
/**
 * Created by IntelliJ IDEA.
 * User: nikolayyotsov
 * Date: 7/19/17
 * Time: 4:32 PM
 */

namespace SslStoreSdk\Request\Order;

use SslStoreSdk\Core\BaseRequest;

class InviteOrder extends BaseRequest
{
    public $PreferVendorLink;
    public $ProductCode;
    public $ExtraProductCode;
    public $ServerCount;
    public $RequestorEmail;
    public $ExtraSAN;
    public $CustomOrderID;
    public $ValidityPeriod;
    public $AddInstallationSupport;
    public $SignatureHashAlgorithm;
    public $EmailLanguageCode;
    public $PreferSendOrderEmails;
    public $CertTransparencyIndicator;
    public $DateTimeCulture;
}
