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
class LeadResponse implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @var Address $address public property
     */
    public $address;

    /**
     * @todo Write general description for this property
     * @var string $leadId public property
     */
    public $leadId;

    /**
     * @todo Write general description for this property
     * @var string $leadState public property
     */
    public $leadState;

    /**
     * Constructor to set initial or default values of member properties
     * @param   Address           $address     Initialization value for the property $this->address  
     * @param   string            $leadId      Initialization value for the property $this->leadId   
     * @param   string            $leadState   Initialization value for the property $this->leadState
     */
    public function __construct()
    {
        if(3 == func_num_args())
        {
            $this->address   = func_get_arg(0);
            $this->leadId    = func_get_arg(1);
            $this->leadState = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['address']   = $this->address;
        $json['leadId']    = $this->leadId;
        $json['leadState'] = $this->leadState;

        return $json;
    }
}