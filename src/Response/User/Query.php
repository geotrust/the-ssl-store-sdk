<?php
/**
 * Created by IntelliJ IDEA.
 * User: nikolayyotsov
 * Date: 7/19/17
 * Time: 5:49 PM
 */

namespace SslStoreSdk\Response\User;


use SslStoreSdk\Core\BaseResponse;

class Query extends BaseResponse
{
    public $PartnerCode;
    public $CustomePartnerCode;
    public $AuthenticationToken;
    public $PartnerEmail;
    public $isEnabled;
}
