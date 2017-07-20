<?php
/**
 * Created by IntelliJ IDEA.
 * User: nikolayyotsov
 * Date: 7/19/17
 * Time: 4:46 PM
 */

namespace SslStoreSdk\Request\User;

use SslStoreSdk\Core\BaseRequest;

class AccountDetail extends BaseRequest
{
    public $PartnerCode;
    public $AuthToken;
    public $ReplayToken;
    public $UserAgent;
    public $IPAddress;
}
