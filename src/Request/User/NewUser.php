<?php
/**
 * Created by IntelliJ IDEA.
 * User: nikolayyotsov
 * Date: 7/19/17
 * Time: 4:46 PM
 */

namespace SslStoreSdk\Request\User;

use SslStoreSdk\Core\BaseRequest;

class NewUser extends BaseRequest
{
    public $Email;
    public $Password;
    public $FirstName;
    public $LastName;
    public $AlternateEmail;
    public $CompanyName;
    public $Street;
    public $CountryName;
    public $State;
    public $City;
    public $Zip;
    public $Phone;
    public $Fax;
    public $Mobile;
    public $UserType;
    public $HearedBy;
}
