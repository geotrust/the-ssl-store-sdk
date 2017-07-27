<?php
/**
 * Created by IntelliJ IDEA.
 * User: nikolayyotsov
 * Date: 7/19/17
 * Time: 4:32 PM
 */

namespace SslStoreSdk\Request\Order;

use SslStoreSdk\Core\BaseRequest;
use SslStoreSdk\Core\Contact;
use SslStoreSdk\Core\OrganizationAddress;
use SslStoreSdk\Core\OrganizationInfo;

class NewOrder extends BaseRequest
{
    public static $webservertypes
        = [
            'AOL'                                   => 'aol',
            'Apache + MOD SSL'                      => 'apachessl',
            'Apache + Raven'                        => 'apacheraven',
            'Apache + SSLeay'                       => 'apachessleay',
            'Microsoft Internet Information Server' => 'iis',
            'Microsoft IIS 4.0'                     => 'iis4',
            'Microsoft IIS 5.0'                     => 'iis5',
            'C2Net Stronghold'                      => 'c2net',
            'IBM HTTP'                              => 'Ibmhttp',
            'IBM Internet Connection Server'        => 'Ibminternet',
            'iPlanet Server 4.1'                    => 'Iplanet',
            'Lotus Domino Go 4.6.2.51'              => 'Dominogo4625',
            'Lotus Domino Go 4.6.2.6+'              => 'Dominogo4626',
            'Lotus Domino 4.6+'                     => 'Domino',
            'Netscape Enterprise/FastTrack'         => 'Netscape',
            'Netscape FastTrack'                    => 'NetscapeFastTrack',
            'Zeus v3+'                              => 'zeusv3',
            'Other'                                 => 'Other',
            'Apache + OpenSSL'                      => 'apacheopenssl',
            'Apache 2'                              => 'apache2',
            'Apache + ApacheSSL'                    => 'apacheapachessl',
            'Cobalt Series'                         => 'cobaltseries',
            'Covalent Server Software'              => 'covalentserver',
            'Cpanel'                                => 'cpanel',
            'Ensim'                                 => 'ensim',
            'Hsphere'                               => 'hsphere',
            'Ipswitch'                              => 'ipswitch',
            'Plesk'                                 => 'plesk',
            'Jakart-Tomcat'                         => 'tomcat',
            'WebLogic – all versions'               => 'WebLogic',
            'O’Reilly WebSite Professional'         => 'website',
            'WebStar'                               => 'webstar',
            'SAP Web Application Server'            => 'sapwebserver',
            'WebTen (from Tenon)'                   => 'webten',
            'RedHat Linux'                          => 'redhat',
            'Raven SSL'                             => 'reven',
            'R3 SSL Server'                         => 'r3ssl',
            'Quid Pro Quo'                          => 'quid',
            'Oracle'                                => 'oracle',
            'Java Web Server (Javasoft / Sun)'      => 'javawebserver',
            'Cisco 3000 Series VPN Concentrator'    => 'cisco3000',
            'Citrix'                                => 'citrix',
        ];

    public function __construct($args = [])
    {
        $this->OrganizationInfo                      = new OrganizationInfo();
        $this->OrganizationInfo->OrganizationAddress = new OrganizationAddress(
        );
        $this->AdminContact                          = new Contact();
        $this->TechnicalContact                      = new Contact();

        self::validateWebServerType($args);

        parent::__construct($args);
    }

    public $CustomOrderID;
    public $ProductCode;
    public $ExtraProductCodes;
    public $OrganizationInfo;
    public $ValidityPeriod;
    public $ServerCount;
    public $CSR;
    public $DomainName;
    public $WebServerType;
    public $DNSNames;
    public $isCUOrder;
    public $isRenewalOrder;
    public $SpecialInstructions;
    public $RelatedTheSSLStoreOrderID;
    public $isTrialOrder;
    public $AdminContact;
    public $TechnicalContact;
    public $ApproverEmail;
    public $ReserveSANCount;
    public $AddInstallationSupport;
    public $EmailLanguageCode;
    public $FileAuthDVIndicator;
    public $CNAMEAuthDVIndicator;
    public $HTTPSFileAuthDVIndicator;
    public $SignatureHashAlgorithm;
    public $CertTransparencyIndicator;
    public $RenewalDays;
    public $DateTimeCulture;
    public $CSRUniqueValue;

    private static function validateWebServerType($args)
    {
        if (!($webServerType = $args['WebServerType'] ?? null)) {
            throw new \InvalidArgumentException(
                sprintf(
                    'Required "WebServerType" is missing.Allowed values are : %s'
                    , implode(',', self::$webservertypes)
                )
            );
        };

        if (!in_array($webServerType, self::$webservertypes)) {
            throw new \InvalidArgumentException(
                'Invalid web server type: ' . $webServerType
            );
        }
    }
}
