<?php
/**
 * Created by IntelliJ IDEA.
 * User: nikolayyotsov
 * Date: 7/19/17
 * Time: 5:38 PM
 */

namespace SslStoreSdk\Response;

use SslStoreSdk\Core\BaseResponse;

class FreeCuinfo extends BaseResponse
{
    public $isSupported;
    public $Months;
    public $SerialNumber;
    public $ExpirationDate;
    public $Issuer;
}
