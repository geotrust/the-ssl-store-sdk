<?php
/**
 * Created by IntelliJ IDEA.
 * User: nikolayyotsov
 * Date: 7/19/17
 * Time: 5:49 PM
 */

namespace SslStoreSdk\Response\User;

use SslStoreSdk\Core\BaseResponse;

class AccountDetail extends BaseResponse
{
    public $PartnerCode;
    public $CompanyName;
    public $FullName;
    public $Email;
    public $AlternateEmail;
    public $AccountType;
    public $AccountBalance;
    public $CurrentPlan;
    public $AllowCredit;
}
