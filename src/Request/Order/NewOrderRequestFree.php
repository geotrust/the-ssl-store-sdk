<?php
/**
 * Created by IntelliJ IDEA.
 * User: nikolayyotsov
 * Date: 7/19/17
 * Time: 4:33 PM
 */

namespace SslStoreSdk\Request\Order;

use SslStoreSdk\Core\BaseRequest;
use SslStoreSdk\Core\Contact;

class NewOrderRequestFree extends BaseRequest
{
    public function __construct()
    {
        $this->TechnicalContact = new Contact();
        parent::__construct();
    }

    public $TechnicalContact;
}
