<?php 
/*
 * PersonalCloudStorageAPIsLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ) on 10/13/2016
 */

namespace PersonalCloudStorageAPIsLib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class CreateShareRequest implements JsonSerializable {
    /**
     * An array of resource request object.
     * @required
     * @var ResourceRequest[] $resources public property
     */
    public $resources;

    /**
     * The name of the share.
     * @var string $name public property
     */
    public $name;

    /**
     * The time to live of the share in seconds. The value 0 signifies the share will never expire. Minimum value is 300. If not provided, defaults to 86400.
     * @var integer $expiresIn public property
     */
    public $expiresIn;

    /**
     * Constructor to set initial or default values of member properties
     * @param   array             $resources   Initialization value for the property $this->resources
     * @param   string            $name        Initialization value for the property $this->name     
     * @param   integer           $expiresIn   Initialization value for the property $this->expiresIn
     */
    public function __construct()
    {
        if(3 == func_num_args())
        {
            $this->resources = func_get_arg(0);
            $this->name      = func_get_arg(1);
            $this->expiresIn = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['resources'] = $this->resources;
        $json['name']      = $this->name;
        $json['expiresIn'] = $this->expiresIn;

        return $json;
    }
}