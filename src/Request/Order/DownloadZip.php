<?php
/**
 * Created by IntelliJ IDEA.
 * User: nikolayyotsov
 * Date: 7/19/17
 * Time: 4:31 PM
 */

namespace SslStoreSdk\Request\Order;

use SslStoreSdk\Core\BaseRequest;
use SslStoreSdk\Core\DateTimeCultureValidator;

class DownloadZip extends BaseRequest
{
    use DateTimeCultureValidator;

    public $CustomOrderID;
    public $TheSSLStoreOrderID;
    public $ResendEmailType;
    public $ResendEmail;
    public $RefundReason;
    public $RefundRequestID;
    public $ApproverMethod;
    public $DomainNames;
    public $SerialNumber;
    public $ReturnPKCS7Cert;
    public $DateTimeCulture;

    public function __construct(array $args = [])
    {
        parent::__construct($args);
    }
}
