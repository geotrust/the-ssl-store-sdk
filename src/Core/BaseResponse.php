<?php
/**
 * Created by IntelliJ IDEA.
 * User: nikolayyotsov
 * Date: 7/19/17
 * Time: 4:23 PM
 */

namespace SslStoreSdk\Core;


class BaseResponse
{

    public $AuthResponse;

    public function __construct()
    {
        $this->AuthResponse = new apiresponse();
    }

    public function __toString(): string
    {
        return var_export($this, true);
    }

}
