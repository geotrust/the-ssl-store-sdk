<?php
/**
 * Created by IntelliJ IDEA.
 * User: nikolayyotsov
 * Date: 7/19/17
 * Time: 5:48 PM
 */

namespace SslStoreSdk\Response\User;

use SslStoreSdk\Core\BaseResponse;

class NewUser extends BaseResponse
{
    public $PartnerCode;
    public $isEnabled;
}
