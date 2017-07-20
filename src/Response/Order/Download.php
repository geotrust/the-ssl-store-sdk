<?php
/**
 * Created by IntelliJ IDEA.
 * User: nikolayyotsov
 * Date: 7/19/17
 * Time: 5:44 PM
 */

namespace SslStoreSdk\Response\Order;

use SslStoreSdk\Core\BaseResponse;

class Download extends BaseResponse
{
    public $PartnerOrderID;
    public $CertificateStatus;
    public $ValidationStatus;
    public $Certificates;
    public $CertificateStartDate;
    public $CertificateEndDate;
    public $CertificateStartDateInUTC;
    public $CertificateEndDateInUTC;
}
