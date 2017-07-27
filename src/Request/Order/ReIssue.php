<?php
/**
 * Created by IntelliJ IDEA.
 * User: nikolayyotsov
 * Date: 7/19/17
 * Time: 4:40 PM
 */

namespace SslStoreSdk\Request\Order;

use SslStoreSdk\Core\BaseRequest;
use SslStoreSdk\Core\WebServerTypeValidator;

class ReIssue extends BaseRequest
{
    use WebServerTypeValidator;

    public function __construct($args = [])
    {
        $this->EditSAN   = [];
        $this->DeleteSAN = [];
        $this->AddSAN    = [];

        self::validateWebServerType($args);

        parent::__construct($args);
    }

    public $TheSSLStoreOrderID;
    public $CSR;
    public $WebServerType;
    public $DNSNames;
    public $SpecialInstructions;
    public $EditSAN;
    public $DeleteSAN;
    public $AddSAN;
    public $isWildCard;
    public $ReissueEmail;
    public $PreferEnrollmentLink;
    public $SignatureHashAlgorithm;
    public $FileAuthDVIndicator;
    public $HTTPSFileAuthDVIndicator;
    public $CNAMEAuthDVIndicator;
    public $ApproverEmails;
    public $CertTransparencyIndicator;
    public $DateTimeCulture;
    public $CSRUniqueValue;
}
