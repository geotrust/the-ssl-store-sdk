<?php
/**
 * Created by IntelliJ IDEA.
 * User: nikolayyotsov
 * Date: 7/19/17
 * Time: 5:48 PM
 */

namespace SslStoreSdk\Response\Order;

use SslStoreSdk\Core\BaseResponse;

class Pmr extends BaseResponse
{
    public $TheSSLStoreOrderID;
    public $PMRStatus;
    public $ExpediteDate;
}
