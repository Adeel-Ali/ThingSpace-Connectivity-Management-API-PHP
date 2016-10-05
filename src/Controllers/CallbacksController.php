<?php
/*
 * ThingSpaceConnectivityManagementAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ) on 10/05/2016
 */

namespace ThingSpaceConnectivityManagementAPILib\Controllers;

use ThingSpaceConnectivityManagementAPILib\APIException;
use ThingSpaceConnectivityManagementAPILib\APIHelper;
use ThingSpaceConnectivityManagementAPILib\Configuration;
use ThingSpaceConnectivityManagementAPILib\Models;
use ThingSpaceConnectivityManagementAPILib\Exceptions;
use ThingSpaceConnectivityManagementAPILib\Http\HttpRequest;
use ThingSpaceConnectivityManagementAPILib\Http\HttpResponse;
use ThingSpaceConnectivityManagementAPILib\Http\HttpMethod;
use ThingSpaceConnectivityManagementAPILib\Http\HttpContext;
use Unirest\Request;

/**
 * @todo Add a general description for this controller.
 */
class CallbacksController extends BaseController {

    /**
     * @var CallbacksController The reference to *Singleton* instance of this class
     */
    private static $instance;
    
    /**
     * Returns the *Singleton* instance of this class.
     * @return CallbacksController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Stops the platform from sending callback messages for the specified account and service.
     * @param  string     $vZM2MToken       Required parameter: M2M-MC Session Token
     * @param  string     $aname            Required parameter: Account name
     * @param  string     $sname            Required parameter: Service name
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function deleteUnregisterCallbackUsingDELETE (
                $vZM2MToken,
                $aname,
                $sname) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/callbacks/{aname}/name/{sname}';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'aname'        => $aname,
            'sname'        => $sname,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json',
            'api_key' => Configuration::$apiKey,
            'VZ-M2M-Token'    => $vZM2MToken
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::DELETE, $_headers, $_queryUrl);
        if($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);            
        }

        //and invoke the API call request to fetch the response
        $response = Request::delete($_queryUrl, $_headers);

        //call on-after Http callback
        if($this->getHttpCallBack() != null) {
            $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
            $_httpContext = new HttpContext($_httpRequest, $_httpResponse);
            
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);            
        }

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new Exceptions\RestErrorResponseException('Error Response', $_httpContext);
        }

        else if (($response->code < 200) || ($response->code > 208)) { //[200,208] = HTTP OK
            throw new APIException("HTTP Response Not OK", $_httpContext);
        }

        $mapper = $this->getJsonMapper();

        return $mapper->map($response->body, new Models\CallbackActionResponse());
    }
        
    /**
     * Registers a URL where an account will receive RESTFul messages from a platform callback service.
     * @param  string                      $vZM2MToken       Required parameter: M2M-MC Session Token
     * @param  string                      $aname            Required parameter: Account name
     * @param  Models\RegisterCallbackRequest $request          Required parameter: Request
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createRegisterCallbackUsingPOST (
                $vZM2MToken,
                $aname,
                $request) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/callbacks/{aname}';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'aname'        => $aname,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json',
            'content-type'  => 'application/json; charset=utf-8',
            'api_key' => Configuration::$apiKey,
            'VZ-M2M-Token'    => $vZM2MToken
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);
        if($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);            
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Json($request));

        //call on-after Http callback
        if($this->getHttpCallBack() != null) {
            $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
            $_httpContext = new HttpContext($_httpRequest, $_httpResponse);
            
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);            
        }

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new Exceptions\RestErrorResponseException('Error Response', $_httpContext);
        }

        else if (($response->code < 200) || ($response->code > 208)) { //[200,208] = HTTP OK
            throw new APIException("HTTP Response Not OK", $_httpContext);
        }

        $mapper = $this->getJsonMapper();

        return $mapper->map($response->body, new Models\CallbackActionResponse());
    }
        
    /**
     * Returns the name and endpoint URL of all callback listening services registered for a given account.
     * @param  string     $vZM2MToken       Required parameter: M2M-MC Session Token
     * @param  string     $aname            Required parameter: Account name
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function listCallbacksUsingGET (
                $vZM2MToken,
                $aname) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/callbacks/{aname}';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'aname'        => $aname,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json',
            'api_key' => Configuration::$apiKey,
            'VZ-M2M-Token'    => $vZM2MToken
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);            
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        //call on-after Http callback
        if($this->getHttpCallBack() != null) {
            $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
            $_httpContext = new HttpContext($_httpRequest, $_httpResponse);
            
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);            
        }

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new Exceptions\RestErrorResponseException('Error Response', $_httpContext);
        }

        else if (($response->code < 200) || ($response->code > 208)) { //[200,208] = HTTP OK
            throw new APIException("HTTP Response Not OK", $_httpContext);
        }

        $mapper = $this->getJsonMapper();

        return $mapper->mapArray($response->body, array(), new Models\Callback());
    }
        

}