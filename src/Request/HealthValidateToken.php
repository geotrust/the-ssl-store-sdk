<?php
/**
 * Created by IntelliJ IDEA.
 * User: nikolayyotsov
 * Date: 7/19/17
 * Time: 4:30 PM
 */

namespace SslStoreSdk\Request;

use SslStoreSdk\Core\BaseRequest;

class HealthValidateToken extends BaseRequest
{
    public $Token;
    public $TokenID;
    public $TokenCode;
    public $IsUsedForTokenSystem = true;
}
