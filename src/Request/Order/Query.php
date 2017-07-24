<?php
/**
 * Created by IntelliJ IDEA.
 * User: nikolayyotsov
 * Date: 7/19/17
 * Time: 4:39 PM
 */

namespace SslStoreSdk\Request\Order;

use SslStoreSdk\Core\BaseRequest;

class Query extends BaseRequest
{
    public $StartDate;
    public $EndDate;
    public $CertificateExpireToDate;
    public $CertificateExpireFromDate;
    public $DomainName;
    public $SubUserID;
    public $ProductCode;
    public $DateTimeCulture;
    public $PageNumber;
    public $PageSize;
}
