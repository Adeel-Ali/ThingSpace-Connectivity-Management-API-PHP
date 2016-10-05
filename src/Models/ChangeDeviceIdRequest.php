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
class ChangeDeviceIdRequest implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @var bool $assignNonGeoMdn public property
     */
    public $assignNonGeoMdn;

    /**
     * @todo Write general description for this property
     * @var string $change4gOption public property
     */
    public $change4gOption;

    /**
     * @todo Write general description for this property
     * @var DeviceId[] $deviceIds public property
     */
    public $deviceIds;

    /**
     * @todo Write general description for this property
     * @var DeviceId[] $deviceIdsTo public property
     */
    public $deviceIdsTo;

    /**
     * @todo Write general description for this property
     * @var string $npaNxx public property
     */
    public $npaNxx;

    /**
     * @todo Write general description for this property
     * @var string $servicePlan public property
     */
    public $servicePlan;

    /**
     * @todo Write general description for this property
     * @var string $zipCode public property
     */
    public $zipCode;

    /**
     * Constructor to set initial or default values of member properties
     * @param   bool              $assignNonGeoMdn   Initialization value for the property $this->assignNonGeoMdn
     * @param   string            $change4gOption    Initialization value for the property $this->change4gOption 
     * @param   array             $deviceIds         Initialization value for the property $this->deviceIds      
     * @param   array             $deviceIdsTo       Initialization value for the property $this->deviceIdsTo    
     * @param   string            $npaNxx            Initialization value for the property $this->npaNxx         
     * @param   string            $servicePlan       Initialization value for the property $this->servicePlan    
     * @param   string            $zipCode           Initialization value for the property $this->zipCode        
     */
    public function __construct()
    {
        if(7 == func_num_args())
        {
            $this->assignNonGeoMdn = func_get_arg(0);
            $this->change4gOption  = func_get_arg(1);
            $this->deviceIds       = func_get_arg(2);
            $this->deviceIdsTo     = func_get_arg(3);
            $this->npaNxx          = func_get_arg(4);
            $this->servicePlan     = func_get_arg(5);
            $this->zipCode         = func_get_arg(6);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['assignNonGeoMdn'] = $this->assignNonGeoMdn;
        $json['change4gOption']  = $this->change4gOption;
        $json['deviceIds']       = $this->deviceIds;
        $json['deviceIdsTo']     = $this->deviceIdsTo;
        $json['npaNxx']          = $this->npaNxx;
        $json['servicePlan']     = $this->servicePlan;
        $json['zipCode']         = $this->zipCode;

        return $json;
    }
}