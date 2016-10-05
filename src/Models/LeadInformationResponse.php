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
class LeadInformationResponse implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @var bool $hasMoreData public property
     */
    public $hasMoreData;

    /**
     * @todo Write general description for this property
     * @var LeadResponse[] $leads public property
     */
    public $leads;

    /**
     * Constructor to set initial or default values of member properties
     * @param   bool              $hasMoreData   Initialization value for the property $this->hasMoreData
     * @param   array             $leads         Initialization value for the property $this->leads      
     */
    public function __construct()
    {
        if(2 == func_num_args())
        {
            $this->hasMoreData = func_get_arg(0);
            $this->leads       = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['hasMoreData'] = $this->hasMoreData;
        $json['leads']       = $this->leads;

        return $json;
    }
}