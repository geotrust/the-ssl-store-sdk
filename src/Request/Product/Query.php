<?php
/**
 * Created by IntelliJ IDEA.
 * User: nikolayyotsov
 * Date: 7/19/17
 * Time: 4:42 PM
 */

namespace SslStoreSdk\Request\Product;

use SslStoreSdk\Core\BaseRequest;

class Query extends BaseRequest
{
    public $ProductCode;
    public $ProductType;
    public $NeedSortedList;
}
