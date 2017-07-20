<?php
/**
 * Created by IntelliJ IDEA.
 * User: nikolayyotsov
 * Date: 7/19/17
 * Time: 4:39 PM
 */

namespace SslStoreSdk\Request\Order;

use SslStoreSdk\Core\BaseRequest;

class ModifiedSummary extends BaseRequest
{
    public $SubUserID;
    public $StartDate;
    public $EndDate;
    public $PageNumber;
    public $PageSize;
}
