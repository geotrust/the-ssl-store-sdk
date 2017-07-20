<?php
/**
 * Created by IntelliJ IDEA.
 * User: nikolayyotsov
 * Date: 7/19/17
 * Time: 4:24 PM
 */

namespace SslStoreSdk\Core;


class ApiResponse
{
    public $isError             = false;
    public $Message;
    public $Timestamp           = '';
    public $ReplayToken         = '';
    public $InvokingPartnerCode = '';

    public function __toString(): string
    {
        return var_export($this, true);
    }
}
