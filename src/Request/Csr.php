<?php
/**
 * Created by IntelliJ IDEA.
 * User: nikolayyotsov
 * Date: 7/19/17
 * Time: 4:29 PM
 */

namespace SslStoreSdk\Request;

use SslStoreSdk\Core\BaseRequest;

class Csr extends BaseRequest
{
    public $ProductCode = '';
    public $CSR         = '';
}
