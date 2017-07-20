<?php
/**
 * Created by IntelliJ IDEA.
 * User: nikolayyotsov
 * Date: 7/19/17
 * Time: 5:45 PM
 */

namespace SslStoreSdk\Response\Order;

use SslStoreSdk\Core\BaseResponse;

class DownloadZip extends BaseResponse
{
    public $PartnerOrderID;
    public $CertificateStatus;
    public $ValidationStatus;
    public $Zip;
    public $pkcs7zip;
    public $CertificateStartDate;
    public $CertificateEndDate;
    public $CertificateStartDateInUTC;
    public $CertificateEndDateInUTC;
}
