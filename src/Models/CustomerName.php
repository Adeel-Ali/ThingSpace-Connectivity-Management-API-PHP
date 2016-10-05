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
class CustomerName implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @var string $firstName public property
     */
    public $firstName;

    /**
     * @todo Write general description for this property
     * @var string $lastName public property
     */
    public $lastName;

    /**
     * @todo Write general description for this property
     * @var string $middleName public property
     */
    public $middleName;

    /**
     * @todo Write general description for this property
     * @var string $title public property
     */
    public $title;

    /**
     * Constructor to set initial or default values of member properties
     * @param   string            $firstName    Initialization value for the property $this->firstName 
     * @param   string            $lastName     Initialization value for the property $this->lastName  
     * @param   string            $middleName   Initialization value for the property $this->middleName
     * @param   string            $title        Initialization value for the property $this->title     
     */
    public function __construct()
    {
        if(4 == func_num_args())
        {
            $this->firstName  = func_get_arg(0);
            $this->lastName   = func_get_arg(1);
            $this->middleName = func_get_arg(2);
            $this->title      = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['firstName']  = $this->firstName;
        $json['lastName']   = $this->lastName;
        $json['middleName'] = $this->middleName;
        $json['title']      = $this->title;

        return $json;
    }
}