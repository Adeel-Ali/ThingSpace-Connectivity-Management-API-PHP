# Getting Started

## How to Build

The generated code has dependencies over external libraries like UniRest. These dependencies are defined in the ```composer.json``` file that comes with the SDK. 
To resolve these dependencies, we use the Composer package manager which requires PHP greater than 5.3.2 installed in your system. 
Visit [https://getcomposer.org/download/](https://getcomposer.org/download/) to download the installer file for Composer and run it in your system. 
Open command prompt and type ```composer --version```. This should display the current version of the Composer installed if the installation was successful.

* Using command line, navigate to the directory containing the generated files (including ```composer.json```) for the SDK. 
* Run the command ```composer install```. This should install all the required dependencies and create the ```vendor``` directory in your project directory.

![Building SDK - Step 1](http://apidocs.io/illustration/php?step=installDependencies&workspaceFolder=ThingSpace%20Connectivity%20Management%20API-PHP)

### [For Windows Users Only] Configuring CURL Certificate Path in php.ini

CURL used to include a list of accepted CAs, but no longer bundles ANY CA certs. So by default it will reject all SSL certificates as unverifiable. You will have to get your CA's cert and point curl at it. The steps are as follows:

1. Download the certificate bundle (.pem file) from [https://curl.haxx.se/docs/caextract.html](https://curl.haxx.se/docs/caextract.html) on to your system.
2. Add curl.cainfo = "PATH_TO/cacert.pem" to your php.ini file located in your php installation. “PATH_TO” must be an absolute path containing the .pem file.

```ini
[curl]
; A default value for the CURLOPT_CAINFO option. This is required to be an
; absolute path.
;curl.cainfo =
```

## How to Use

The following section explains how to use the ThingSpaceConnectivityManagementAPI library in a new project.

### 1. Open Project in an IDE

Open an IDE for PHP like PhpStorm. The basic workflow presented here is also applicable if you prefer using a different editor or IDE.

![Open project in PHPStorm - Step 1](http://apidocs.io/illustration/php?step=openIDE&workspaceFolder=ThingSpace%20Connectivity%20Management%20API-PHP)

Click on ```Open``` in PhpStorm to browse to your generated SDK directory and then click ```OK```.

![Open project in PHPStorm - Step 2](http://apidocs.io/illustration/php?step=openProject0&workspaceFolder=ThingSpace%20Connectivity%20Management%20API-PHP)     

### 2. Add a new Test Project

Create a new directory by right clicking on the solution name as shown below:

![Add a new project in PHPStorm - Step 1](http://apidocs.io/illustration/php?step=createDirectory&workspaceFolder=ThingSpace%20Connectivity%20Management%20API-PHP)

Name the directory as "test"

![Add a new project in PHPStorm - Step 2](http://apidocs.io/illustration/php?step=nameDirectory&workspaceFolder=ThingSpace%20Connectivity%20Management%20API-PHP)
   
Add a PHP file to this project

![Add a new project in PHPStorm - Step 3](http://apidocs.io/illustration/php?step=createFile&workspaceFolder=ThingSpace%20Connectivity%20Management%20API-PHP)

Name it "testSDK"

![Add a new project in PHPStorm - Step 4](http://apidocs.io/illustration/php?step=nameFile&workspaceFolder=ThingSpace%20Connectivity%20Management%20API-PHP)

Depending on your project setup, you might need to include composer's autoloader in your PHP code to enable auto loading of classes.

```PHP
require_once "../vendor/autoload.php";
```

It is important that the path inside require_once correctly points to the file ```autoload.php``` inside the vendor directory created during dependency installations.

![Add a new project in PHPStorm - Step 4](http://apidocs.io/illustration/php?step=projectFiles&workspaceFolder=ThingSpace%20Connectivity%20Management%20API-PHP)

After this you can add code to initialize the client library and acquire the instance of a Controller class. Sample code to initialize the client library and using controller methods is given in the subsequent sections.

### 3. Run the Test Project

To run your project you must set the Interpreter for your project. Interpreter is the PHP engine installed on your computer.

Open ```Settings``` from ```File``` menu.

![Run Test Project - Step 1](http://apidocs.io/illustration/php?step=openSettings&workspaceFolder=ThingSpace%20Connectivity%20Management%20API-PHP)

Select ```PHP``` from within ```Languages & Frameworks```

![Run Test Project - Step 2](http://apidocs.io/illustration/php?step=setInterpreter0&workspaceFolder=ThingSpace%20Connectivity%20Management%20API-PHP)

Browse for Interpreters near the ```Interpreter``` option and choose your interpreter.

![Run Test Project - Step 3](http://apidocs.io/illustration/php?step=setInterpreter1&workspaceFolder=ThingSpace%20Connectivity%20Management%20API-PHP)

Once the interpreter is selected, click ```OK```

![Run Test Project - Step 4](http://apidocs.io/illustration/php?step=setInterpreter2&workspaceFolder=ThingSpace%20Connectivity%20Management%20API-PHP)

To run your project, right click on your PHP file inside your Test project and click on ```Run```

![Run Test Project - Step 5](http://apidocs.io/illustration/php?step=runProject&workspaceFolder=ThingSpace%20Connectivity%20Management%20API-PHP)

## How to Test

Unit tests in this SDK can be run using PHPUnit. 

1. First install the dependencies using composer including the `require-dev` dependencies.
2. Run `vendor\bin\phpunit --verbose` from commandline to execute tests. If you have 
   installed PHPUnit globally, run tests using `phpunit --verbose` instead.

You can change the PHPUnit test configuration in the `phpunit.xml` file.

## Initialization

### Authentication and Initialization
In order to setup authentication and initialization of the API client, you need the following information.

| Parameter | Description |
|-----------|-------------|
| apiKey | TODO: add a description |



API client can be initialized as following.

```php
// Configuration parameters and credentials
$apiKey = "apiKey";

$client = new ThingSpaceConnectivityManagementAPIClient($apiKey);
```

## Class Reference

### <a name="list_of_controllers"></a>List of Controllers

* [SmsController](#sms_controller)
* [SessionController](#session_controller)
* [PlansController](#plans_controller)
* [LeadsController](#leads_controller)
* [GroupsController](#groups_controller)
* [DevicesController](#devices_controller)
* [CallbacksController](#callbacks_controller)

### <a name="sms_controller"></a>![Class: ](http://apidocs.io/img/class.png ".SmsController") SmsController

#### Get singleton instance

The singleton instance of the ``` SmsController ``` class can be accessed from the API Client.

```php
$sms = $client->getSms();
```

#### <a name="update_start_sms_callback_using_put"></a>![Method: ](http://apidocs.io/img/method.png ".SmsController.updateStartSmsCallbackUsingPUT") updateStartSmsCallbackUsingPUT

> Starts delivery of queued SMS messages for the specific account.


```php
function updateStartSmsCallbackUsingPUT(
        $aname,
        $vZM2MToken)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| aname |  ``` Required ```  | Account name |
| vZM2MToken |  ``` Required ```  | M2M-MC Session Token |



#### Example Usage

```php
$aname = 'aname';
$vZM2MToken = 'VZ-M2M-Token';

$result = $sms->updateStartSmsCallbackUsingPUT($aname, $vZM2MToken);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Error Response |



#### <a name="get_sms_messages_using_get"></a>![Method: ](http://apidocs.io/img/method.png ".SmsController.getSmsMessagesUsingGET") getSmsMessagesUsingGET

> Retrieves queued SMS messages sent by all M2M MC devices associated with an account.


```php
function getSmsMessagesUsingGET(
        $aname,
        $vZM2MToken,
        $next = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| aname |  ``` Required ```  | Account name |
| vZM2MToken |  ``` Required ```  | M2M-MC Session Token |
| next |  ``` Optional ```  | Continue the previous query from the URL in Location Header |



#### Example Usage

```php
$aname = 'aname';
$vZM2MToken = 'VZ-M2M-Token';
$next = 139;

$result = $sms->getSmsMessagesUsingGET($aname, $vZM2MToken, $next);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Error Response |



#### <a name="create_send_sms_message_using_post"></a>![Method: ](http://apidocs.io/img/method.png ".SmsController.createSendSmsMessageUsingPOST") createSendSmsMessageUsingPOST

> Sends an SMS message to one or more devices.


```php
function createSendSmsMessageUsingPOST(
        $request,
        $vZM2MToken)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| request |  ``` Required ```  | SMS Request |
| vZM2MToken |  ``` Required ```  | M2M-MC Session Token |



#### Example Usage

```php
$request = new SMSSendRequest();
$vZM2MToken = 'VZ-M2M-Token';

$result = $sms->createSendSmsMessageUsingPOST($request, $vZM2MToken);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Error Response |



[Back to List of Controllers](#list_of_controllers)

### <a name="session_controller"></a>![Class: ](http://apidocs.io/img/class.png ".SessionController") SessionController

#### Get singleton instance

The singleton instance of the ``` SessionController ``` class can be accessed from the API Client.

```php
$session = $client->getSession();
```

#### <a name="update_reset_using_put"></a>![Method: ](http://apidocs.io/img/method.png ".SessionController.updateResetUsingPUT") updateResetUsingPUT

> Returns a new, randomly generated password for the current username


```php
function updateResetUsingPUT(
        $request,
        $vZM2MToken)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| request |  ``` Required ```  | Current Password |
| vZM2MToken |  ``` Required ```  | M2M-MC Session Token |



#### Example Usage

```php
$request = new SessionResetPasswordRequest();
$vZM2MToken = 'VZ-M2M-Token';

$result = $session->updateResetUsingPUT($request, $vZM2MToken);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Error Response |



#### <a name="create_logout_using_post"></a>![Method: ](http://apidocs.io/img/method.png ".SessionController.createLogoutUsingPOST") createLogoutUsingPOST

> Ends a Connectivity Management session.


```php
function createLogoutUsingPOST($vZM2MToken)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| vZM2MToken |  ``` Required ```  | M2M-MC Session Token |



#### Example Usage

```php
$vZM2MToken = 'VZ-M2M-Token';

$result = $session->createLogoutUsingPOST($vZM2MToken);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Error Response |



#### <a name="create_login_using_post"></a>![Method: ](http://apidocs.io/img/method.png ".SessionController.createLoginUsingPOST") createLoginUsingPOST

> Initiates a Connectivity Management session and returns a session token required in subsequent API requests.


```php
function createLoginUsingPOST($request = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| request |  ``` Optional ```  | request |



#### Example Usage

```php
$request = new LogInRequest();

$result = $session->createLoginUsingPOST($request);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Error Response |



[Back to List of Controllers](#list_of_controllers)

### <a name="plans_controller"></a>![Class: ](http://apidocs.io/img/class.png ".PlansController") PlansController

#### Get singleton instance

The singleton instance of the ``` PlansController ``` class can be accessed from the API Client.

```php
$plans = $client->getPlans();
```

#### <a name="get_service_plan_list_using_get"></a>![Method: ](http://apidocs.io/img/method.png ".PlansController.getServicePlanListUsingGET") getServicePlanListUsingGET

> Returns a list of all data service plans that are associated with a specified account.


```php
function getServicePlanListUsingGET(
        $vZM2MToken,
        $aname)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| vZM2MToken |  ``` Required ```  | M2M-MC Session Token |
| aname |  ``` Required ```  | Account name |



#### Example Usage

```php
$vZM2MToken = 'VZ-M2M-Token';
$aname = 'aname';

$result = $plans->getServicePlanListUsingGET($vZM2MToken, $aname);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Error Response |



[Back to List of Controllers](#list_of_controllers)

### <a name="leads_controller"></a>![Class: ](http://apidocs.io/img/class.png ".LeadsController") LeadsController

#### Get singleton instance

The singleton instance of the ``` LeadsController ``` class can be accessed from the API Client.

```php
$leads = $client->getLeads();
```

#### <a name="get_list_using_get1"></a>![Method: ](http://apidocs.io/img/method.png ".LeadsController.getListUsingGET1") getListUsingGET1

> Returns information for all leads associated with the account


```php
function getListUsingGET1(
        $vZM2MToken,
        $aname,
        $next = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| vZM2MToken |  ``` Required ```  | M2M-MC Session Token |
| aname |  ``` Required ```  | Account name |
| next |  ``` Optional ```  | Continue the previous query from the pageUrl in Location Header |



#### Example Usage

```php
$vZM2MToken = 'VZ-M2M-Token';
$aname = 'aname';
$next = 230;

$result = $leads->getListUsingGET1($vZM2MToken, $aname, $next);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Error Response |



[Back to List of Controllers](#list_of_controllers)

### <a name="groups_controller"></a>![Class: ](http://apidocs.io/img/class.png ".GroupsController") GroupsController

#### Get singleton instance

The singleton instance of the ``` GroupsController ``` class can be accessed from the API Client.

```php
$groups = $client->getGroups();
```

#### <a name="delete_device_group_using_delete"></a>![Method: ](http://apidocs.io/img/method.png ".GroupsController.deleteDeviceGroupUsingDELETE") deleteDeviceGroupUsingDELETE

> Deletes a device group. Devices in the group are moved to the default device group and are not deleted from the account.


```php
function deleteDeviceGroupUsingDELETE(
        $vZM2MToken,
        $aname,
        $gname)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| vZM2MToken |  ``` Required ```  | M2M-MC Session Token |
| aname |  ``` Required ```  | Account name |
| gname |  ``` Required ```  | Group name |



#### Example Usage

```php
$vZM2MToken = 'VZ-M2M-Token';
$aname = 'aname';
$gname = 'gname';

$result = $groups->deleteDeviceGroupUsingDELETE($vZM2MToken, $aname, $gname);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Error Response |



#### <a name="update_device_group_using_put"></a>![Method: ](http://apidocs.io/img/method.png ".GroupsController.updateDeviceGroupUsingPUT") updateDeviceGroupUsingPUT

> Make changes to a device group, including changing the name and description, and adding or removing devices.


```php
function updateDeviceGroupUsingPUT(
        $request,
        $aname,
        $gname,
        $vZM2MToken)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| request |  ``` Required ```  | Request |
| aname |  ``` Required ```  | Account name |
| gname |  ``` Required ```  | Group name |
| vZM2MToken |  ``` Required ```  | M2M-MC Session Token |



#### Example Usage

```php
$request = new GroupUpdateRequest();
$aname = 'aname';
$gname = 'gname';
$vZM2MToken = 'VZ-M2M-Token';

$result = $groups->updateDeviceGroupUsingPUT($request, $aname, $gname, $vZM2MToken);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Error Response |



#### <a name="get_device_group_info_using_get"></a>![Method: ](http://apidocs.io/img/method.png ".GroupsController.getDeviceGroupInfoUsingGET") getDeviceGroupInfoUsingGET

> Returns the name, description, and list of devices in a device group.


```php
function getDeviceGroupInfoUsingGET(
        $aname,
        $gname,
        $vZM2MToken,
        $next = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| aname |  ``` Required ```  | Account name |
| gname |  ``` Required ```  | Group name |
| vZM2MToken |  ``` Required ```  | M2M-MC Session Token |
| next |  ``` Optional ```  | Continue the previous query from the pageUrl pagetoken |



#### Example Usage

```php
$aname = 'aname';
$gname = 'gname';
$vZM2MToken = 'VZ-M2M-Token';
$next = 230;

$result = $groups->getDeviceGroupInfoUsingGET($aname, $gname, $vZM2MToken, $next);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Error Response |



#### <a name="get_list_using_get"></a>![Method: ](http://apidocs.io/img/method.png ".GroupsController.getListUsingGET") getListUsingGET

> Returns a list of device groups in an account


```php
function getListUsingGET(
        $vZM2MToken,
        $aname)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| vZM2MToken |  ``` Required ```  | M2M-MC Session Token |
| aname |  ``` Required ```  | Account name |



#### Example Usage

```php
$vZM2MToken = 'VZ-M2M-Token';
$aname = 'aname';

$result = $groups->getListUsingGET($vZM2MToken, $aname);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Error Response |



#### <a name="create_device_group_using_post"></a>![Method: ](http://apidocs.io/img/method.png ".GroupsController.createDeviceGroupUsingPOST") createDeviceGroupUsingPOST

> Creates a new device group and optionally adds a set of devices to that group.


```php
function createDeviceGroupUsingPOST(
        $request,
        $vZM2MToken)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| request |  ``` Required ```  | Request |
| vZM2MToken |  ``` Required ```  | M2M-MC Session Token |



#### Example Usage

```php
$request = new CreateDevGroupRequest();
$vZM2MToken = 'VZ-M2M-Token';

$result = $groups->createDeviceGroupUsingPOST($request, $vZM2MToken);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Error Response |



[Back to List of Controllers](#list_of_controllers)

### <a name="devices_controller"></a>![Class: ](http://apidocs.io/img/class.png ".DevicesController") DevicesController

#### Get singleton instance

The singleton instance of the ``` DevicesController ``` class can be accessed from the API Client.

```php
$devices = $client->getDevices();
```

#### <a name="change_device_id_using_put"></a>![Method: ](http://apidocs.io/img/method.png ".DevicesController.changeDeviceIdUsingPUT") changeDeviceIdUsingPUT

> Changes the identifier of a 3G or 4G device to match hardware changes made for a line of service.


```php
function changeDeviceIdUsingPUT(
        $serviceType,
        $request,
        $vZM2MToken)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| serviceType |  ``` Required ```  | Identifier type |
| request |  ``` Required ```  | Device Usage Query |
| vZM2MToken |  ``` Required ```  | M2M-MC Session Token |



#### Example Usage

```php
$serviceType = 'serviceType';
$request = new ChangeDeviceIdRequest();
$vZM2MToken = 'VZ-M2M-Token';

$result = $devices->changeDeviceIdUsingPUT($serviceType, $request, $vZM2MToken);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Error Response |



#### <a name="create_aggregate_using_post"></a>![Method: ](http://apidocs.io/img/method.png ".DevicesController.createAggregateUsingPOST") createAggregateUsingPOST

> Returns the total amount of data sent and the total number of SMS messages sent or received by a set of devices in a specified timeframe.


```php
function createAggregateUsingPOST(
        $request,
        $vZM2MToken)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| request |  ``` Required ```  | Request |
| vZM2MToken |  ``` Required ```  | M2M-MC Session Token |



#### Example Usage

```php
$request = new DeviceAggregateUsageListRequest();
$vZM2MToken = 'VZ-M2M-Token';

$result = $devices->createAggregateUsingPOST($request, $vZM2MToken);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Error Response |



#### <a name="create_usage_list_using_post"></a>![Method: ](http://apidocs.io/img/method.png ".DevicesController.createUsageListUsingPOST") createUsageListUsingPOST

> Returns the network data usage history of a device during a specified time period.


```php
function createUsageListUsingPOST(
        $request,
        $vZM2MToken)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| request |  ``` Required ```  | Device Usage Query |
| vZM2MToken |  ``` Required ```  | M2M-MC Session Token |



#### Example Usage

```php
$request = new DeviceUsageListRequest();
$vZM2MToken = 'VZ-M2M-Token';

$result = $devices->createUsageListUsingPOST($request, $vZM2MToken);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Error Response |



#### <a name="create_prl_list_using_post"></a>![Method: ](http://apidocs.io/img/method.png ".DevicesController.createPrlListUsingPOST") createPrlListUsingPOST

> Requests the current PRL version for devices, which can help determine which devices need a PRL update.


```php
function createPrlListUsingPOST(
        $request,
        $vZM2MToken)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| request |  ``` Required ```  | Device PRL Query |
| vZM2MToken |  ``` Required ```  | M2M-MC Session Token |



#### Example Usage

```php
$request = new DevicePrlListRequest();
$vZM2MToken = 'VZ-M2M-Token';

$result = $devices->createPrlListUsingPOST($request, $vZM2MToken);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Error Response |



#### <a name="create_provisioning_history_list_using_post"></a>![Method: ](http://apidocs.io/img/method.png ".DevicesController.createProvisioningHistoryListUsingPOST") createProvisioningHistoryListUsingPOST

> Returns the provisioning history of a device during a specified time period.


```php
function createProvisioningHistoryListUsingPOST(
        $request,
        $vZM2MToken)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| request |  ``` Required ```  | Device ProHistory Query |
| vZM2MToken |  ``` Required ```  | M2M-MC Session Token |



#### Example Usage

```php
$request = new DeviceProvisioningHistoryListRequest();
$vZM2MToken = 'VZ-M2M-Token';

$result = $devices->createProvisioningHistoryListUsingPOST($request, $vZM2MToken);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Error Response |



#### <a name="change_cost_center_using_put"></a>![Method: ](http://apidocs.io/img/method.png ".DevicesController.changeCostCenterUsingPUT") changeCostCenterUsingPUT

> Changes or removes the costCenterCode value for one or more devices.


```php
function changeCostCenterUsingPUT(
        $request,
        $vZM2MToken)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| request |  ``` Required ```  | Request |
| vZM2MToken |  ``` Required ```  | M2M-MC Session Token |



#### Example Usage

```php
$request = new DeviceCostCenterRequest();
$vZM2MToken = 'VZ-M2M-Token';

$result = $devices->changeCostCenterUsingPUT($request, $vZM2MToken);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Error Response |



#### <a name="create_connection_list_history_using_post"></a>![Method: ](http://apidocs.io/img/method.png ".DevicesController.createConnectionListHistoryUsingPOST") createConnectionListHistoryUsingPOST

> Returns a list of network connection events for a device during a specified time period.


```php
function createConnectionListHistoryUsingPOST(
        $request,
        $vZM2MToken)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| request |  ``` Required ```  | Device Connection Query |
| vZM2MToken |  ``` Required ```  | M2M-MC Session Token |



#### Example Usage

```php
$request = new DeviceConnectionListRequest();
$vZM2MToken = 'VZ-M2M-Token';

$result = $devices->createConnectionListHistoryUsingPOST($request, $vZM2MToken);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Error Response |



#### <a name="create_connection_list_using_post"></a>![Method: ](http://apidocs.io/img/method.png ".DevicesController.createConnectionListUsingPOST") createConnectionListUsingPOST

> Returns a list of network connection events for a device during a specified time period.


```php
function createConnectionListUsingPOST(
        $request,
        $vZM2MToken)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| request |  ``` Required ```  | Device Connection Query |
| vZM2MToken |  ``` Required ```  | M2M-MC Session Token |



#### Example Usage

```php
$request = new DeviceConnectionListRequest();
$vZM2MToken = 'VZ-M2M-Token';

$result = $devices->createConnectionListUsingPOST($request, $vZM2MToken);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Error Response |



#### <a name="create_restore_using_post"></a>![Method: ](http://apidocs.io/img/method.png ".DevicesController.createRestoreUsingPOST") createRestoreUsingPOST

> Restore service to one or more suspended devices. 


```php
function createRestoreUsingPOST(
        $request,
        $vZM2MToken)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| request |  ``` Required ```  | Update state |
| vZM2MToken |  ``` Required ```  | M2M-MC Session Token |



#### Example Usage

```php
$request = new CarrierActionsRequest();
$vZM2MToken = 'VZ-M2M-Token';

$result = $devices->createRestoreUsingPOST($request, $vZM2MToken);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Error Response |



#### <a name="create_suspend_using_post"></a>![Method: ](http://apidocs.io/img/method.png ".DevicesController.createSuspendUsingPOST") createSuspendUsingPOST

> Suspends service for one or more devices. 


```php
function createSuspendUsingPOST(
        $request,
        $vZM2MToken)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| request |  ``` Required ```  | Update state |
| vZM2MToken |  ``` Required ```  | M2M-MC Session Token |



#### Example Usage

```php
$request = new CarrierActionsRequest();
$vZM2MToken = 'VZ-M2M-Token';

$result = $devices->createSuspendUsingPOST($request, $vZM2MToken);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Error Response |



#### <a name="update_service_plan_using_put"></a>![Method: ](http://apidocs.io/img/method.png ".DevicesController.updateServicePlanUsingPUT") updateServicePlanUsingPUT

> Sets a new service plan for one or more devices.


```php
function updateServicePlanUsingPUT(
        $request,
        $vZM2MToken)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| request |  ``` Required ```  | Request |
| vZM2MToken |  ``` Required ```  | M2M-MC Session Token |



#### Example Usage

```php
$request = new ServicePlanUpdateRequest();
$vZM2MToken = 'VZ-M2M-Token';

$result = $devices->updateServicePlanUsingPUT($request, $vZM2MToken);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Error Response |



#### <a name="create_list_using_post"></a>![Method: ](http://apidocs.io/img/method.png ".DevicesController.createListUsingPOST") createListUsingPOST

> Returns information about a specified device or a list of devices in an account.


```php
function createListUsingPOST(
        $request,
        $vZM2MToken)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| request |  ``` Required ```  | Device Query |
| vZM2MToken |  ``` Required ```  | M2M-MC Session Token |



#### Example Usage

```php
$request = new DeviceListRequest();
$vZM2MToken = 'VZ-M2M-Token';

$result = $devices->createListUsingPOST($request, $vZM2MToken);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Error Response |



#### <a name="create_deactive_using_post"></a>![Method: ](http://apidocs.io/img/method.png ".DevicesController.createDeactiveUsingPOST") createDeactiveUsingPOST

> Deactivates service for one or more devices.


```php
function createDeactiveUsingPOST(
        $request,
        $vZM2MToken)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| request |  ``` Required ```  | Deactivate state |
| vZM2MToken |  ``` Required ```  | M2M-MC Session Token |



#### Example Usage

```php
$request = new CarrierDeactivateRequest();
$vZM2MToken = 'VZ-M2M-Token';

$result = $devices->createDeactiveUsingPOST($request, $vZM2MToken);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Error Response |



#### <a name="update_custom_fields_using_put"></a>![Method: ](http://apidocs.io/img/method.png ".DevicesController.updateCustomFieldsUsingPUT") updateCustomFieldsUsingPUT

> Updates one or more custom field values for devices.


```php
function updateCustomFieldsUsingPUT(
        $request,
        $vZM2MToken)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| request |  ``` Required ```  | Request |
| vZM2MToken |  ``` Required ```  | M2M-MC Session Token |



#### Example Usage

```php
$request = new CustomFieldsUpdateRequest();
$vZM2MToken = 'VZ-M2M-Token';

$result = $devices->updateCustomFieldsUsingPUT($request, $vZM2MToken);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Error Response |



#### <a name="add_using_post"></a>![Method: ](http://apidocs.io/img/method.png ".DevicesController.addUsingPOST") addUsingPOST

> Adds up to 200 new devices, without provisioning lines of service for them.


```php
function addUsingPOST(
        $request,
        $vZM2MToken)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| request |  ``` Required ```  | Devices to Add |
| vZM2MToken |  ``` Required ```  | M2M-MC Session Token |



#### Example Usage

```php
$request = new AddDevicesRequest();
$vZM2MToken = 'VZ-M2M-Token';

$result = $devices->addUsingPOST($request, $vZM2MToken);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Error Response |



#### <a name="create_active_using_post"></a>![Method: ](http://apidocs.io/img/method.png ".DevicesController.createActiveUsingPOST") createActiveUsingPOST

> Activates service for one or more devices.


```php
function createActiveUsingPOST(
        $request,
        $vZM2MToken)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| request |  ``` Required ```  | Activate state |
| vZM2MToken |  ``` Required ```  | M2M-MC Session Token |



#### Example Usage

```php
$request = new CarrierActivateRequest();
$vZM2MToken = 'VZ-M2M-Token';

$result = $devices->createActiveUsingPOST($request, $vZM2MToken);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Error Response |



[Back to List of Controllers](#list_of_controllers)

### <a name="callbacks_controller"></a>![Class: ](http://apidocs.io/img/class.png ".CallbacksController") CallbacksController

#### Get singleton instance

The singleton instance of the ``` CallbacksController ``` class can be accessed from the API Client.

```php
$callbacks = $client->getCallbacks();
```

#### <a name="delete_unregister_callback_using_delete"></a>![Method: ](http://apidocs.io/img/method.png ".CallbacksController.deleteUnregisterCallbackUsingDELETE") deleteUnregisterCallbackUsingDELETE

> Stops the platform from sending callback messages for the specified account and service.


```php
function deleteUnregisterCallbackUsingDELETE(
        $vZM2MToken,
        $aname,
        $sname)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| vZM2MToken |  ``` Required ```  | M2M-MC Session Token |
| aname |  ``` Required ```  | Account name |
| sname |  ``` Required ```  | Service name |



#### Example Usage

```php
$vZM2MToken = 'VZ-M2M-Token';
$aname = 'aname';
$sname = 'sname';

$result = $callbacks->deleteUnregisterCallbackUsingDELETE($vZM2MToken, $aname, $sname);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Error Response |



#### <a name="create_register_callback_using_post"></a>![Method: ](http://apidocs.io/img/method.png ".CallbacksController.createRegisterCallbackUsingPOST") createRegisterCallbackUsingPOST

> Registers a URL where an account will receive RESTFul messages from a platform callback service.


```php
function createRegisterCallbackUsingPOST(
        $vZM2MToken,
        $aname,
        $request)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| vZM2MToken |  ``` Required ```  | M2M-MC Session Token |
| aname |  ``` Required ```  | Account name |
| request |  ``` Required ```  | Request |



#### Example Usage

```php
$vZM2MToken = 'VZ-M2M-Token';
$aname = 'aname';
$request = new RegisterCallbackRequest();

$result = $callbacks->createRegisterCallbackUsingPOST($vZM2MToken, $aname, $request);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Error Response |



#### <a name="list_callbacks_using_get"></a>![Method: ](http://apidocs.io/img/method.png ".CallbacksController.listCallbacksUsingGET") listCallbacksUsingGET

> Returns the name and endpoint URL of all callback listening services registered for a given account.


```php
function listCallbacksUsingGET(
        $vZM2MToken,
        $aname)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| vZM2MToken |  ``` Required ```  | M2M-MC Session Token |
| aname |  ``` Required ```  | Account name |



#### Example Usage

```php
$vZM2MToken = 'VZ-M2M-Token';
$aname = 'aname';

$result = $callbacks->listCallbacksUsingGET($vZM2MToken, $aname);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Error Response |



[Back to List of Controllers](#list_of_controllers)



