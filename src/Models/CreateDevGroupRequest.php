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
class CreateDevGroupRequest implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @var string $accountName public property
     */
    public $accountName;

    /**
     * @todo Write general description for this property
     * @var DeviceId[] $devicesToAdd public property
     */
    public $devicesToAdd;

    /**
     * @todo Write general description for this property
     * @var string $groupDescription public property
     */
    public $groupDescription;

    /**
     * @todo Write general description for this property
     * @var string $groupName public property
     */
    public $groupName;

    /**
     * Constructor to set initial or default values of member properties
     * @param   string            $accountName        Initialization value for the property $this->accountName     
     * @param   array             $devicesToAdd       Initialization value for the property $this->devicesToAdd    
     * @param   string            $groupDescription   Initialization value for the property $this->groupDescription
     * @param   string            $groupName          Initialization value for the property $this->groupName       
     */
    public function __construct()
    {
        if(4 == func_num_args())
        {
            $this->accountName      = func_get_arg(0);
            $this->devicesToAdd     = func_get_arg(1);
            $this->groupDescription = func_get_arg(2);
            $this->groupName        = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['accountName']      = $this->accountName;
        $json['devicesToAdd']     = $this->devicesToAdd;
        $json['groupDescription'] = $this->groupDescription;
        $json['groupName']        = $this->groupName;

        return $json;
    }
}