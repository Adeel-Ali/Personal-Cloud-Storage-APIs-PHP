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
class TrashResponse implements JsonSerializable {
    /**
     * Total number of search matches
     * @required
     * @var integer $count public property
     */
    public $count;

    /**
     * @todo Write general description for this property
     * @required
     * @var TrashData $data public property
     */
    public $data;

    /**
     * Constructor to set initial or default values of member properties
     * @param   integer           $count   Initialization value for the property $this->count
     * @param   TrashData         $data    Initialization value for the property $this->data 
     */
    public function __construct()
    {
        if(2 == func_num_args())
        {
            $this->count = func_get_arg(0);
            $this->data  = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['count'] = $this->count;
        $json['data']  = $this->data;

        return $json;
    }
}