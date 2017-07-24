<?php
/**
 * Created by IntelliJ IDEA.
 * User: nikolayyotsov
 * Date: 7/19/17
 * Time: 4:30 PM
 */

namespace SslStoreSdk\Request;

use SslStoreSdk\Core\BaseRequest;
use SslStoreSdk\Request\Order\NewOrderRequestFree;

class FreeClaimFree extends BaseRequest
{
    public $ProductCode;
    public $RelatedTheSSLStoreOrderID;
    public $NewOrderRequest;

    public function __construct($args = [])
    {
        $this->NewOrderRequest = new NewOrderRequestFree();

        parent::__construct($args);
    }
}
