<?php
/**
 * Created by IntelliJ IDEA.
 * User: nikolayyotsov
 * Date: 7/19/17
 * Time: 4:44 PM
 */

namespace SslStoreSdk\Request\Setting;

use SslStoreSdk\Core\BaseRequest;

class SetTemplate extends BaseRequest
{
    public $EmailSubject;
    public $EmailMessage;
    public $isDisabled;
    public $EmailTemplateTypes;
}
