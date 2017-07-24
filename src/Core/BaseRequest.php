<?php
/**
 * Created by IntelliJ IDEA.
 * User: nikolayyotsov
 * Date: 7/19/17
 * Time: 4:20 PM
 */

namespace SslStoreSdk\Core;

class BaseRequest
{
    public $AuthRequest;

    public function __construct(array $args = [])
    {
        $this->map($args);
        
        $this->AuthRequest = new ApiRequest();
    }

    public function __toString() : string
    {
        return var_export($this, true);
    }


    private function map(array $args = [])
    {
        foreach ($args as $propName => $propVal ) {
            property_exists($this, $propName)
                ? $this->$propName = $propVal
                : null;
        }
    }
}
