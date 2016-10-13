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
class PlaylistAddRequest implements JsonSerializable {
    /**
     * An array of paths to items.
     * @required
     * @var array $add public property
     */
    public $add;

    /**
     * Constructor to set initial or default values of member properties
     * @param   array             $add   Initialization value for the property $this->add
     */
    public function __construct()
    {
        if(1 == func_num_args())
        {
            $this->add = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['add'] = $this->add;

        return $json;
    }
}