<?php
/**
 * Created by IntelliJ IDEA.
 * User: nikolayyotsov
 * Date: 7/19/17
 * Time: 4:45 PM
 */

namespace SslStoreSdk\Request\User;

use SslStoreSdk\Core\BaseRequest;

class Deactivate extends BaseRequest
{
    public $PartnerCode;
    public $CustomPartnerCode;
    public $AuthenticationToken;
    public $PartnerEmail;
    public $isEnabled;
}
