<?php
/**
 * Created by IntelliJ IDEA.
 * User: nikolayyotsov
 * Date: 7/19/17
 * Time: 4:31 PM
 */

namespace SslStoreSdk\Request\Order;

use SslStoreSdk\Core\BaseRequest;
use SslStoreSdk\Core\OrganizationAddress;
use SslStoreSdk\Core\OrganizationInfo;
use SslStoreSdk\Core\WebServerTypeValidator;

class OrderAgreement extends BaseRequest
{
    use WebServerTypeValidator;

    public function __construct($args = [])
    {
        $this->OrganizationInfo                      = new OrganizationInfo();
        $this->OrganizationInfo->OrganizationAddress = new OrganizationAddress(
        );

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
}
