<?php
/**
 * Created by IntelliJ IDEA.
 * User: nikolayyotsov
 * Date: 7/19/17
 * Time: 5:44 PM
 */

namespace SslStoreSdk\Response\User;

use SslStoreSdk\Core\BaseResponse;

class SubUser extends BaseResponse
{
    public $PartnerCode;
    public $CustomPartnerCode;
    public $AuthenticationToken;
    public $PartnerEmail;
    public $isEnabled;
}
