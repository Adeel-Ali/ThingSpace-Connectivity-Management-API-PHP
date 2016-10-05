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
class DeviceListRequest implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @var string $accountName public property
     */
    public $accountName;

    /**
     * @todo Write general description for this property
     * @var string $currentState public property
     */
    public $currentState;

    /**
     * @todo Write general description for this property
     * @var KvPair[] $customFields public property
     */
    public $customFields;

    /**
     * @todo Write general description for this property
     * @var DeviceId $deviceId public property
     */
    public $deviceId;

    /**
     * @todo Write general description for this property
     * @var string $earliest public property
     */
    public $earliest;

    /**
     * @todo Write general description for this property
     * @var string $groupName public property
     */
    public $groupName;

    /**
     * @todo Write general description for this property
     * @var string $latest public property
     */
    public $latest;

    /**
     * @todo Write general description for this property
     * @var string $servicePlan public property
     */
    public $servicePlan;

    /**
     * Constructor to set initial or default values of member properties
     * @param   string            $accountName    Initialization value for the property $this->accountName 
     * @param   string            $currentState   Initialization value for the property $this->currentState
     * @param   array             $customFields   Initialization value for the property $this->customFields
     * @param   DeviceId          $deviceId       Initialization value for the property $this->deviceId    
     * @param   string            $earliest       Initialization value for the property $this->earliest    
     * @param   string            $groupName      Initialization value for the property $this->groupName   
     * @param   string            $latest         Initialization value for the property $this->latest      
     * @param   string            $servicePlan    Initialization value for the property $this->servicePlan 
     */
    public function __construct()
    {
        if(8 == func_num_args())
        {
            $this->accountName  = func_get_arg(0);
            $this->currentState = func_get_arg(1);
            $this->customFields = func_get_arg(2);
            $this->deviceId     = func_get_arg(3);
            $this->earliest     = func_get_arg(4);
            $this->groupName    = func_get_arg(5);
            $this->latest       = func_get_arg(6);
            $this->servicePlan  = func_get_arg(7);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['accountName']  = $this->accountName;
        $json['currentState'] = $this->currentState;
        $json['customFields'] = $this->customFields;
        $json['deviceId']     = $this->deviceId;
        $json['earliest']     = $this->earliest;
        $json['groupName']    = $this->groupName;
        $json['latest']       = $this->latest;
        $json['servicePlan']  = $this->servicePlan;

        return $json;
    }
}