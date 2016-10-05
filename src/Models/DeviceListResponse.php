<?php 
/*
 * ThingSpaceConnectivityManagementAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ) on 10/05/2016
 */

namespace ThingSpaceConnectivityManagementAPILib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class DeviceListResponse implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @var Device[] $devices public property
     */
    public $devices;

    /**
     * @todo Write general description for this property
     * @var bool $hasMoreData public property
     */
    public $hasMoreData;

    /**
     * Constructor to set initial or default values of member properties
     * @param   array             $devices       Initialization value for the property $this->devices    
     * @param   bool              $hasMoreData   Initialization value for the property $this->hasMoreData
     */
    public function __construct()
    {
        if(2 == func_num_args())
        {
            $this->devices     = func_get_arg(0);
            $this->hasMoreData = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['devices']     = $this->devices;
        $json['hasMoreData'] = $this->hasMoreData;

        return $json;
    }
}