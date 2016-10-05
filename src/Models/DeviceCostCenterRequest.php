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
class DeviceCostCenterRequest implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @var string $accountName public property
     */
    public $accountName;

    /**
     * @todo Write general description for this property
     * @var string $costCenter public property
     */
    public $costCenter;

    /**
     * @todo Write general description for this property
     * @var KvPair[] $customFields public property
     */
    public $customFields;

    /**
     * @todo Write general description for this property
     * @var DeviceList[] $devices public property
     */
    public $devices;

    /**
     * @todo Write general description for this property
     * @var string $groupName public property
     */
    public $groupName;

    /**
     * @todo Write general description for this property
     * @var bool $removeCostCenter public property
     */
    public $removeCostCenter;

    /**
     * @todo Write general description for this property
     * @var string $servicePlan public property
     */
    public $servicePlan;

    /**
     * Constructor to set initial or default values of member properties
     * @param   string            $accountName        Initialization value for the property $this->accountName     
     * @param   string            $costCenter         Initialization value for the property $this->costCenter      
     * @param   array             $customFields       Initialization value for the property $this->customFields    
     * @param   array             $devices            Initialization value for the property $this->devices         
     * @param   string            $groupName          Initialization value for the property $this->groupName       
     * @param   bool              $removeCostCenter   Initialization value for the property $this->removeCostCenter
     * @param   string            $servicePlan        Initialization value for the property $this->servicePlan     
     */
    public function __construct()
    {
        if(7 == func_num_args())
        {
            $this->accountName      = func_get_arg(0);
            $this->costCenter       = func_get_arg(1);
            $this->customFields     = func_get_arg(2);
            $this->devices          = func_get_arg(3);
            $this->groupName        = func_get_arg(4);
            $this->removeCostCenter = func_get_arg(5);
            $this->servicePlan      = func_get_arg(6);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['accountName']      = $this->accountName;
        $json['costCenter']       = $this->costCenter;
        $json['customFields']     = $this->customFields;
        $json['devices']          = $this->devices;
        $json['groupName']        = $this->groupName;
        $json['removeCostCenter'] = $this->removeCostCenter;
        $json['servicePlan']      = $this->servicePlan;

        return $json;
    }
}