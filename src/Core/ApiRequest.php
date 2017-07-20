<?php
/**
 * Created by IntelliJ IDEA.
 * User: nikolayyotsov
 * Date: 7/19/17
 * Time: 4:22 PM
 */

namespace SslStoreSdk\Core;

class ApiRequest
{
    public $PartnerCode          = '';
    public $AuthToken            = '';
    public $ReplayToken          = '';
    public $UserAgent            = '';
    public $TokenID              = '';
    public $TokenCode            = '';
    public $IPAddress            = '';
    public $IsUsedForTokenSystem = false;
    public $Token                = '';
}
