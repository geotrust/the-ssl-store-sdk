<?php
/**
 * Created by IntelliJ IDEA.
 * User: nikolayyotsov
 * Date: 7/19/17
 * Time: 4:38 PM
 */

namespace SslStoreSdk\Request\Order;

use SslStoreSdk\Core\BaseRequest;
use SslStoreSdk\Core\WebServerTypeValidator;

class Validate extends BaseRequest
{
    use WebServerTypeValidator;

    public $CSR;
    public $ProductCode;
    public $ServerCount;
    public $ValidityPeriod;
    public $WebServerType;

    public function __construct(array $args = [])
    {
        self::validateWebServerType($args);

        parent::__construct($args);
    }
}
