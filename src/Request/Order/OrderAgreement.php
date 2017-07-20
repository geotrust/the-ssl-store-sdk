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

class OrderAgreement extends BaseRequest
{
    public function __construct()
    {
        $this->OrganizationInfo                      = new OrganizationInfo();
        $this->OrganizationInfo->OrganizationAddress = new OrganizationAddress(
        );
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
}
