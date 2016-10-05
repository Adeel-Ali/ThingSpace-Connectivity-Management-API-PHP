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
class SmsMessage implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @var DeviceId[] $deviceIds public property
     */
    public $deviceIds;

    /**
     * @todo Write general description for this property
     * @var string $message public property
     */
    public $message;

    /**
     * @todo Write general description for this property
     * @var string $timestamp public property
     */
    public $timestamp;

    /**
     * Constructor to set initial or default values of member properties
     * @param   array             $deviceIds   Initialization value for the property $this->deviceIds
     * @param   string            $message     Initialization value for the property $this->message  
     * @param   string            $timestamp   Initialization value for the property $this->timestamp
     */
    public function __construct()
    {
        if(3 == func_num_args())
        {
            $this->deviceIds = func_get_arg(0);
            $this->message   = func_get_arg(1);
            $this->timestamp = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['deviceIds'] = $this->deviceIds;
        $json['message']   = $this->message;
        $json['timestamp'] = $this->timestamp;

        return $json;
    }
}