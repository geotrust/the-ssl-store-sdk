<?php
/**
 * Created by IntelliJ IDEA.
 * User: nikolayyotsov
 * Date: 7/19/17
 * Time: 4:38 PM
 */

namespace SslStoreSdk\Request\Order;

use SslStoreSdk\Core\BaseRequest;

class Validate extends BaseRequest
{
    public $CSR;
    public $ProductCode;
    public $ServerCount;
    public $ValidityPeriod;
    public $WebServerType;
}
