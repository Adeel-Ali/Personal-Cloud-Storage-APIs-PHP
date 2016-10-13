# Getting Started

## How to Build

The generated code has dependencies over external libraries like UniRest. These dependencies are defined in the ```composer.json``` file that comes with the SDK. 
To resolve these dependencies, we use the Composer package manager which requires PHP greater than 5.3.2 installed in your system. 
Visit [https://getcomposer.org/download/](https://getcomposer.org/download/) to download the installer file for Composer and run it in your system. 
Open command prompt and type ```composer --version```. This should display the current version of the Composer installed if the installation was successful.

* Using command line, navigate to the directory containing the generated files (including ```composer.json```) for the SDK. 
* Run the command ```composer install```. This should install all the required dependencies and create the ```vendor``` directory in your project directory.

![Building SDK - Step 1](http://apidocs.io/illustration/php?step=installDependencies&workspaceFolder=Personal%20Cloud%20Storage%20APIs-PHP)

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

The following section explains how to use the PersonalCloudStorageAPIs library in a new project.

### 1. Open Project in an IDE

Open an IDE for PHP like PhpStorm. The basic workflow presented here is also applicable if you prefer using a different editor or IDE.

![Open project in PHPStorm - Step 1](http://apidocs.io/illustration/php?step=openIDE&workspaceFolder=Personal%20Cloud%20Storage%20APIs-PHP)

Click on ```Open``` in PhpStorm to browse to your generated SDK directory and then click ```OK```.

![Open project in PHPStorm - Step 2](http://apidocs.io/illustration/php?step=openProject0&workspaceFolder=Personal%20Cloud%20Storage%20APIs-PHP)     

### 2. Add a new Test Project

Create a new directory by right clicking on the solution name as shown below:

![Add a new project in PHPStorm - Step 1](http://apidocs.io/illustration/php?step=createDirectory&workspaceFolder=Personal%20Cloud%20Storage%20APIs-PHP)

Name the directory as "test"

![Add a new project in PHPStorm - Step 2](http://apidocs.io/illustration/php?step=nameDirectory&workspaceFolder=Personal%20Cloud%20Storage%20APIs-PHP)
   
Add a PHP file to this project

![Add a new project in PHPStorm - Step 3](http://apidocs.io/illustration/php?step=createFile&workspaceFolder=Personal%20Cloud%20Storage%20APIs-PHP)

Name it "testSDK"

![Add a new project in PHPStorm - Step 4](http://apidocs.io/illustration/php?step=nameFile&workspaceFolder=Personal%20Cloud%20Storage%20APIs-PHP)

Depending on your project setup, you might need to include composer's autoloader in your PHP code to enable auto loading of classes.

```PHP
require_once "../vendor/autoload.php";
```

It is important that the path inside require_once correctly points to the file ```autoload.php``` inside the vendor directory created during dependency installations.

![Add a new project in PHPStorm - Step 4](http://apidocs.io/illustration/php?step=projectFiles&workspaceFolder=Personal%20Cloud%20Storage%20APIs-PHP)

After this you can add code to initialize the client library and acquire the instance of a Controller class. Sample code to initialize the client library and using controller methods is given in the subsequent sections.

### 3. Run the Test Project

To run your project you must set the Interpreter for your project. Interpreter is the PHP engine installed on your computer.

Open ```Settings``` from ```File``` menu.

![Run Test Project - Step 1](http://apidocs.io/illustration/php?step=openSettings&workspaceFolder=Personal%20Cloud%20Storage%20APIs-PHP)

Select ```PHP``` from within ```Languages & Frameworks```

![Run Test Project - Step 2](http://apidocs.io/illustration/php?step=setInterpreter0&workspaceFolder=Personal%20Cloud%20Storage%20APIs-PHP)

Browse for Interpreters near the ```Interpreter``` option and choose your interpreter.

![Run Test Project - Step 3](http://apidocs.io/illustration/php?step=setInterpreter1&workspaceFolder=Personal%20Cloud%20Storage%20APIs-PHP)

Once the interpreter is selected, click ```OK```

![Run Test Project - Step 4](http://apidocs.io/illustration/php?step=setInterpreter2&workspaceFolder=Personal%20Cloud%20Storage%20APIs-PHP)

To run your project, right click on your PHP file inside your Test project and click on ```Run```

![Run Test Project - Step 5](http://apidocs.io/illustration/php?step=runProject&workspaceFolder=Personal%20Cloud%20Storage%20APIs-PHP)

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
| oAuthAccessToken | The OAuth 2.0 access token to be set before API calls |



API client can be initialized as following.

```php
// Configuration parameters and credentials
$oAuthAccessToken = "oAuthAccessToken"; // The OAuth 2.0 access token to be set before API calls

$client = new PersonalCloudStorageAPIsClient($oAuthAccessToken);
```

## Class Reference

### <a name="list_of_controllers"></a>List of Controllers

* [FilesFoldersController](#files_folders_controller)
* [PlaylistsController](#playlists_controller)
* [SharesController](#shares_controller)
* [TagsController](#tags_controller)
* [AccountInfoController](#account_info_controller)
* [ContactsController](#contacts_controller)

### <a name="files_folders_controller"></a>![Class: ](http://apidocs.io/img/class.png ".FilesFoldersController") FilesFoldersController

#### Get singleton instance

The singleton instance of the ``` FilesFoldersController ``` class can be accessed from the API Client.

```php
$filesFolders = $client->getFilesFolders();
```

#### <a name="delete_purge_trash"></a>![Method: ](http://apidocs.io/img/method.png ".FilesFoldersController.deletePurgeTrash") deletePurgeTrash

> Purges all the files and folder from a repository.


```php
function deletePurgeTrash($virtualfolder)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| virtualfolder |  ``` Required ```  | Folder that represents various client types at the root level and contains their respective data. |



#### Example Usage

```php
$virtualfolder = 'virtualfolder';

$filesFolders->deletePurgeTrash($virtualfolder);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | [Bad Request] |
| 401 | [Unauthorized] Bearer token is missing, expired, or invalid. |
| 503 | [Service Unavailable] See response body for more detail. |



#### <a name="create_restore_trash"></a>![Method: ](http://apidocs.io/img/method.png ".FilesFoldersController.createRestoreTrash") createRestoreTrash

> Restores files or folders.


```php
function createRestoreTrash($trashcanItems)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| trashcanItems |  ``` Required ```  | Request object to restore files or folders from trash. |



#### Example Usage

```php
$trashcanItems = new DeletedList();

$result = $filesFolders->createRestoreTrash($trashcanItems);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | [Bad Request] Path is invalid. |
| 401 | [Unauthorized] Bearer token is missing, expired, or invalid. |
| 404 | [Not Found] Resource not found. |
| 503 | [Service Unavailable] See response body for more detail. |



#### <a name="get_fullview"></a>![Method: ](http://apidocs.io/img/method.png ".FilesFoldersController.getFullview") getFullview

> Retrieve information on all file and folder content.


```php
function getFullview(
        $virtualfolder = NULL,
        $xHeaderETag = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| virtualfolder |  ``` Optional ```  | Folder that represents various client types at the root level and contains their respective data. |
| xHeaderETag |  ``` Optional ```  | Omit this header to request a full response.  To request only changes since a previous call to fullview, include this header as copied from your previous /fullview response. |



#### Example Usage

```php
$virtualfolder = 'virtualfolder';
$xHeaderETag = 'X-Header-ETag';

$result = $filesFolders->getFullview($virtualfolder, $xHeaderETag);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | [Bad Request] Query parameters missing or invalid. |
| 401 | [Unauthorized] Bearer token is missing, expired, or invalid. |
| 404 | [Not Found] File was not found. |
| 412 | [Precondition Failed] An X-Header-ETag header was included in the request, and there are no changes to report. |
| 503 | [Service Unavailable] See response body for more detail. |



#### <a name="get_files"></a>![Method: ](http://apidocs.io/img/method.png ".FilesFoldersController.getFiles") getFiles

> Retrieves file content.


```php
function getFiles($path)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| path |  ``` Required ```  | The path to the file or folder. |



#### Example Usage

```php
$path = 'path';

$result = $filesFolders->getFiles($path);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | [Bad Request] Query parameters missing or invalid. |
| 401 | [Unauthorized] Bearer token is missing, expired, or invalid. |
| 404 | [Not Found] File was not found. |
| 503 | [Service Unavailable] See response body for more detail. |



#### <a name="post_rename"></a>![Method: ](http://apidocs.io/img/method.png ".FilesFoldersController.postRename") postRename

> Rename a file/folder.


```php
function postRename($fileRenameRequest)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| fileRenameRequest |  ``` Required ```  | 'safe' and 'conflictsolve' are optional parameters in the request object to rename a file/folder. |



#### Example Usage

```php
$fileRenameRequest = new FopsChangeRequest();

$result = $filesFolders->postRename($fileRenameRequest);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | [Bad Request] Query parameters missing or invalid. |
| 401 | [Unauthorized] Bearer token is missing, expired, or invalid. |
| 404 | [Not Found] File was not found. |
| 409 | Conflict. |
| 503 | [Service Unavailable] See response body for more detail. |



#### <a name="post_move"></a>![Method: ](http://apidocs.io/img/method.png ".FilesFoldersController.postMove") postMove

> Move a file or folder.


```php
function postMove($fileMoveRequest)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| fileMoveRequest |  ``` Required ```  | 'safe' and 'conflictsolve' are optional parameters in the request object to move a file/folder. |



#### Example Usage

```php
$fileMoveRequest = new FopsChangeRequest();

$result = $filesFolders->postMove($fileMoveRequest);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | [Bad Request] Query parameters missing or invalid. |
| 401 | [Unauthorized] Bearer token is missing, expired, or invalid. |
| 404 | [Not Found] File was not found. |
| 409 | Conflict. |
| 503 | [Service Unavailable] See response body for more detail. |



#### <a name="post_copy"></a>![Method: ](http://apidocs.io/img/method.png ".FilesFoldersController.postCopy") postCopy

> Create a copy of a file/folder.


```php
function postCopy($fileCopyRequest)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| fileCopyRequest |  ``` Required ```  | 'safe', 'conflictsolve' and 'override' are optional parameters in the request object to copy a file/folder. |



#### Example Usage

```php
$fileCopyRequest = new FopsCopyRequest();

$result = $filesFolders->postCopy($fileCopyRequest);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | [Bad Request] Query parameters missing or invalid. |
| 401 | [Unauthorized] Bearer token is missing, expired, or invalid. |
| 404 | [Not Found] File was not found. |
| 409 | Conflict. |
| 503 | [Service Unavailable] See response body for more detail. |



#### <a name="delete_delete"></a>![Method: ](http://apidocs.io/img/method.png ".FilesFoldersController.deleteDelete") deleteDelete

> Delete a file/folder.


```php
function deleteDelete(
        $path,
        $purge = false)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| path |  ``` Required ```  | Full path of the file/folder to be deleted. |
| purge |  ``` Optional ```  ``` DefaultValue ```  | If 'true', permanently deletes the file/folder. |



#### Example Usage

```php
$path = 'path';
$purge = false;

$filesFolders->deleteDelete($path, $purge);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | [Bad Request] Query parameters missing or invalid. |
| 401 | [Unauthorized] Bearer token is missing, expired, or invalid. |
| 404 | [Not Found] File was not found. |
| 503 | [Service Unavailable] See response body for more detail. |



#### <a name="post_createfolder"></a>![Method: ](http://apidocs.io/img/method.png ".FilesFoldersController.postCreatefolder") postCreatefolder

> Create a folder.


```php
function postCreatefolder($folder)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| folder |  ``` Required ```  | 'override' is an optional parameter in the request object to create a folder. |



#### Example Usage

```php
$folder = new FolderRequest();

$result = $filesFolders->postCreatefolder($folder);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | [Bad Request] Query parameters missing or invalid. |
| 401 | [Unauthorized] Bearer token is missing, expired, or invalid. |
| 404 | [Not Found] Path was not found. |
| 503 | [Service Unavailable] See response body for more detail. |



#### <a name="upload_file_create"></a>![Method: ](http://apidocs.io/img/method.png ".FilesFoldersController.uploadFileCreate") uploadFileCreate

> Completes chunk file upload.


```php
function uploadFileCreate($uploadid)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| uploadid |  ``` Required ```  | Unique id to upload file binary content and to create the file. Uploadid is obtained via a call to the /fileupload/intent API (it is embedded in the URLs included in the response). |



#### Example Usage

```php
$uploadid = 'uploadid';

$result = $filesFolders->uploadFileCreate($uploadid);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | [Bad Request] Query parameters missing or invalid. |
| 401 | [Unauthorized] Bearer token is missing, expired, or invalid. |
| 503 | [Service Unavailable] See response body for more detail. |



#### <a name="retrieve_trash"></a>![Method: ](http://apidocs.io/img/method.png ".FilesFoldersController.retrieveTrash") retrieveTrash

> Retrieves a list of deleted files and folders from a single user repository.


```php
function retrieveTrash(
        $virtualfolder,
        $sort = NULL,
        $start = NULL,
        $count = NULL,
        $filter = NULL,
        $deep = false)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| virtualfolder |  ``` Required ```  | Folder that represents various client types at the root level and contains their respective data. |
| sort |  ``` Optional ```  | Controls the sort order in which the response is returned. Uses the syntax: sort={field}+(asc|desc). |
| start |  ``` Optional ```  | Starting point for partial responses, for folder requests. Default is 1. |
| count |  ``` Optional ```  | Maximum items to include in a paginated response, for folder requests.  Required if start is specified. |
| filter |  ``` Optional ```  | Set to 'file' or 'folder', to include only those types of items in the response. |
| deep |  ``` Optional ```  ``` DefaultValue ```  | Specifies whether the search should stop at the topmost deleted item in the tree (deep=false), or navigate into it and list all the deleted contents    (deep=true). |



#### Example Usage

```php
$virtualfolder = 'virtualfolder';
$sort = 'sort';
$start = 204;
$count = 204;
$filter = 'filter';
$deep = false;

$result = $filesFolders->retrieveTrash($virtualfolder, $sort, $start, $count, $filter, $deep);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | [Bad Request] Query parameters missing or invalid. |
| 401 | [Unauthorized] Bearer token is missing, expired, or invalid. |
| 404 | [Not Found] Resource not found. |
| 503 | [Service Unavailable] See response body for more detail. |



#### <a name="get_search"></a>![Method: ](http://apidocs.io/img/method.png ".FilesFoldersController.getSearch") getSearch

> Search for files and folders.


```php
function getSearch(
        $query,
        $virtualfolder = NULL,
        $sort = NULL,
        $start = NULL,
        $count = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| query |  ``` Required ```  | Contains the text to be searched and supports a number of query fields that allow clients to restrict the search to particular parts of a file's or folder's metadata |
| virtualfolder |  ``` Optional ```  | Folder that represents various client types at the root level and contains their respective data. |
| sort |  ``` Optional ```  | Specify sort order for response. Syntax is :'{field}+{asc|desc}'.  Valid values for 'field' are: name, versionCreated, size, extension, album, artist, captureDate, compilation, contentType, creationDate, favorite, genre, height, modificationDate, priority, source, tags, title, timelineDate |
| start |  ``` Optional ```  | Page number to return, for paginated responses. Default is 1. |
| count |  ``` Optional ```  | Maximum items to include in a paginated response, for folder requests.  Required if start is specified. |



#### Example Usage

```php
$query = 'query';
$virtualfolder = 'virtualfolder';
$sort = 'sort';
$start = 204;
$count = 204;

$result = $filesFolders->getSearch($query, $virtualfolder, $sort, $start, $count);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | [Bad Request] Query parameters missing or invalid. |
| 401 | [Unauthorized] Bearer token is missing, expired, or invalid. |
| 503 | [Service Unavailable] See response body for more detail. |



#### <a name="get_thumbnails"></a>![Method: ](http://apidocs.io/img/method.png ".FilesFoldersController.getThumbnails") getThumbnails

> Retrieve thumbnails for a file.


```php
function getThumbnails(
        $contentToken,
        $size,
        $th,
        $tw)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| contentToken |  ``` Required ```  | The file's content token (obtained from a call to /metadata or /fullview). |
| size |  ``` Required ```  | Thumbnail size: 'xs' (24x24), 's' (64x64), or 'm' (128x128). Either 'size' or 'th' and 'tw' are required. |
| th |  ``` Required ```  | Thumbnail height (in pixels). Either 'size' or 'th' and 'tw' are required. |
| tw |  ``` Required ```  | Thumbnail width (in pixels). Either 'size' or 'th' and 'tw' are required. |



#### Example Usage

```php
$contentToken = 'content-token';
$size = 'size';
$th = 204;
$tw = 204;

$result = $filesFolders->getThumbnails($contentToken, $size, $th, $tw);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | [Bad Request] Query parameters missing or invalid. |
| 401 | [Unauthorized] Bearer token is missing, expired, or invalid. |
| 404 | [Not Found] File was not found. |
| 415 | [Unsupported Media Type] Thumbnails are not supported for this type of file. |
| 503 | [Service Unavailable] See response body for more detail. |



#### <a name="get_metadata_path"></a>![Method: ](http://apidocs.io/img/method.png ".FilesFoldersController.getMetadataPath") getMetadataPath

> Get metadata for a file or folder in a user's repository.


```php
function getMetadataPath(
        $path,
        $includeDeleted = false,
        $sort = NULL,
        $start = NULL,
        $count = NULL,
        $filter = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| path |  ``` Required ```  | The path to the file or folder. |
| includeDeleted |  ``` Optional ```  ``` DefaultValue ```  | if true, response will include deleted files and folders. Default is false. |
| sort |  ``` Optional ```  | Specify sort order for response. Syntax is :'{field}+{asc|desc}'.  Valid values for 'field' are: name, versionCreated, size, extension, album, artist, captureDate, compilation, contentType, creationDate, favorite, genre, height, modificationDate, priority, source, tags, title, timelineDate |
| start |  ``` Optional ```  | Starting point for partial responses, for folder requests. Default is 1. |
| count |  ``` Optional ```  | Maximum items to include in a paginated response, for folder requests.  Required if start is specified. |
| filter |  ``` Optional ```  | Set to 'file' or 'folder', to include only those types of items in the response. |



#### Example Usage

```php
$path = 'path';
$includeDeleted = false;
$sort = 'sort';
$start = 204;
$count = 204;
$filter = 'filter';

$result = $filesFolders->getMetadataPath($path, $includeDeleted, $sort, $start, $count, $filter);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | [Bad Request] Query parameters missing or invalid. |
| 401 | [Unauthorized] Bearer token is missing, expired, or invalid. |
| 404 | [Not Found] File was not found. |
| 410 | [Gone] File was removed. |
| 503 | [Service Unavailable] See response body for more detail. |



#### <a name="get_metadata"></a>![Method: ](http://apidocs.io/img/method.png ".FilesFoldersController.getMetadata") getMetadata

> Get metadata for the root folder contents.


```php
function getMetadata(
        $includeDeleted = false,
        $sort = NULL,
        $start = NULL,
        $count = NULL,
        $filter = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| includeDeleted |  ``` Optional ```  ``` DefaultValue ```  | if true, response will include deleted files and folders. Default is false. |
| sort |  ``` Optional ```  | Specify sort order for response. Syntax is :'{field}+{asc|desc}'.  Valid values for 'field' are: name, versionCreated, size, extension, album, artist, captureDate, compilation, contentType, creationDate, favorite, genre, height, modificationDate, priority, source, tags, title, timelineDate |
| start |  ``` Optional ```  | Starting point for partial responses, for folder requests. Default is 1. |
| count |  ``` Optional ```  | Maximum items to include in a paginated response, for folder requests.  Required if start is specified. |
| filter |  ``` Optional ```  | Set to 'file' or 'folder', to include only those types of items in the response. |



#### Example Usage

```php
$includeDeleted = false;
$sort = 'sort';
$start = 204;
$count = 204;
$filter = 'filter';

$result = $filesFolders->getMetadata($includeDeleted, $sort, $start, $count, $filter);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | [Bad Request] Query parameters missing or invalid. |
| 401 | [Unauthorized] Bearer token is missing, expired, or invalid. |
| 404 | [Not Found] File was not found. |
| 503 | [Service Unavailable] See response body for more detail. |



#### <a name="get_upload_file_intent"></a>![Method: ](http://apidocs.io/img/method.png ".FilesFoldersController.getUploadFileIntent") getUploadFileIntent

> Initiates a file upload intent request.


```php
function getUploadFileIntent(
        $path,
        $name,
        $size,
        $checksum,
        $chunk = false)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| path |  ``` Required ```  | The path to the folder where file has to be uploaded. |
| name |  ``` Required ```  | Name of the file to be uploaded. |
| size |  ``` Required ```  | Size of the file to be uploaded. |
| checksum |  ``` Required ```  | Checksum of the file/chunk. |
| chunk |  ``` Optional ```  ``` DefaultValue ```  | Should be set to false, in case the file binary has to be uploaded with single request. Otherwise should be set to true when file binary has to be uploaded in multiple request. |



#### Example Usage

```php
$path = 'path';
$name = 'name';
$size = 204;
$checksum = 'checksum';
$chunk = false;

$result = $filesFolders->getUploadFileIntent($path, $name, $size, $checksum, $chunk);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | [Bad Request] Query parameters missing or invalid. |
| 401 | [Unauthorized] Bearer token is missing, expired, or invalid. |
| 413 | [Request Too Long] User quota exceeded. |
| 503 | [Service Unavailable] See response body for more detail. |



[Back to List of Controllers](#list_of_controllers)

### <a name="playlists_controller"></a>![Class: ](http://apidocs.io/img/class.png ".PlaylistsController") PlaylistsController

#### Get singleton instance

The singleton instance of the ``` PlaylistsController ``` class can be accessed from the API Client.

```php
$playlists = $client->getPlaylists();
```

#### <a name="delete_playlist_item"></a>![Method: ](http://apidocs.io/img/method.png ".PlaylistsController.deletePlaylistItem") deletePlaylistItem

> Remove an item from a playlist.


```php
function deletePlaylistItem(
        $playlistUid,
        $itemUid)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| playlistUid |  ``` Required ```  | Unique id related to a specific playlist. |
| itemUid |  ``` Required ```  | Unique id related to a specific item in a playlist. |



#### Example Usage

```php
$playlistUid = 'playlistUid';
$itemUid = 'itemUid';

$playlists->deletePlaylistItem($playlistUid, $itemUid);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | [Unauthorized] Bearer token is missing, expired, or invalid. |
| 404 | [Not Found] Resource not found. |
| 503 | [Service Unavailable] See response body for more detail. |



#### <a name="get_playlist_content"></a>![Method: ](http://apidocs.io/img/method.png ".PlaylistsController.getPlaylistContent") getPlaylistContent

> Retrieves playlist content.


```php
function getPlaylistContent(
        $playlistUid,
        $itemUid)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| playlistUid |  ``` Required ```  | Unique id related to a specific playlist. |
| itemUid |  ``` Required ```  | Unique id related to a specific item in a playlist. |



#### Example Usage

```php
$playlistUid = 'playlistUid';
$itemUid = 'itemUid';

$result = $playlists->getPlaylistContent($playlistUid, $itemUid);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | [Bad Request] Query parameters missing or invalid. |
| 401 | [Unauthorized] Bearer token is missing, expired, or invalid. |
| 404 | [Not Found] Resource not found. |
| 503 | [Service Unavailable] See response body for more detail. |



#### <a name="delete_playlist"></a>![Method: ](http://apidocs.io/img/method.png ".PlaylistsController.deletePlaylist") deletePlaylist

> Delete a playlist.


```php
function deletePlaylist($playlistUid)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| playlistUid |  ``` Required ```  | Unique id related to a specific playlist. |



#### Example Usage

```php
$playlistUid = 'playlistUid';

$playlists->deletePlaylist($playlistUid);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | [Unauthorized] Bearer token is missing, expired, or invalid. |
| 404 | [Not Found] Resource not found. |
| 503 | [Service Unavailable] See response body for more detail. |



#### <a name="put_playlists"></a>![Method: ](http://apidocs.io/img/method.png ".PlaylistsController.putPlaylists") putPlaylists

> Update a playlist.


```php
function putPlaylists(
        $playlistUid,
        $playlistBase)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| playlistUid |  ``` Required ```  | Unique id related to a specific playlist. |
| playlistBase |  ``` Required ```  | Request object to update basic playlist details. |



#### Example Usage

```php
$playlistUid = 'playlistUid';
$playlistBase = new PlaylistBase();

$result = $playlists->putPlaylists($playlistUid, $playlistBase);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | [Bad Request] Parameters missing or invalid. |
| 401 | [Unauthorized] Bearer token is missing, expired, or invalid. |
| 404 | [Not Found] Resource not found. |
| 503 | [Service Unavailable] See response body for more detail. |



#### <a name="get_playlist"></a>![Method: ](http://apidocs.io/img/method.png ".PlaylistsController.getPlaylist") getPlaylist

> Get a playlist definition.


```php
function getPlaylist($playlistUid)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| playlistUid |  ``` Required ```  | Unique id related to a specific playlist. |



#### Example Usage

```php
$playlistUid = 'playlistUid';

$result = $playlists->getPlaylist($playlistUid);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | [Unauthorized] Bearer token is missing, expired, or invalid. |
| 404 | [Not Found] Resource not found. |
| 503 | [Service Unavailable] See response body for more detail. |



#### <a name="post_playlist_item"></a>![Method: ](http://apidocs.io/img/method.png ".PlaylistsController.postPlaylistItem") postPlaylistItem

> Add item(s) to a playlist.


```php
function postPlaylistItem(
        $playlistUid,
        $playlistItems)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| playlistUid |  ``` Required ```  | Unique id related to a specific playlist. |
| playlistItems |  ``` Required ```  | Request object to add items in playlist. |



#### Example Usage

```php
$playlistUid = 'playlistUid';
$playlistItems = new PlaylistAddRequest();

$result = $playlists->postPlaylistItem($playlistUid, $playlistItems);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | [Bad Request] Parameters missing or invalid. |
| 401 | [Unauthorized] Bearer token is missing, expired, or invalid. |
| 404 | [Not Found] Resource not found. |
| 503 | [Service Unavailable] See response body for more detail. |



#### <a name="update_playlist"></a>![Method: ](http://apidocs.io/img/method.png ".PlaylistsController.updatePlaylist") updatePlaylist

> Update a playlist by sending a new 'playlistDefinition' model.


```php
function updatePlaylist(
        $playlistUid,
        $playlist)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| playlistUid |  ``` Required ```  | Unique id related to a specific playlist. |
| playlist |  ``` Required ```  | playlist request object |



#### Example Usage

```php
$playlistUid = 'playlistUid';
$playlist = new PlaylistRequest();

$result = $playlists->updatePlaylist($playlistUid, $playlist);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | [Bad Request] Parameters missing or invalid. |
| 401 | [Unauthorized] Bearer token is missing, expired, or invalid. |
| 404 | [Not Found] Resource not found. |
| 503 | [Service Unavailable] See response body for more detail. |



#### <a name="post_playlist"></a>![Method: ](http://apidocs.io/img/method.png ".PlaylistsController.postPlaylist") postPlaylist

> Create a playlist.


```php
function postPlaylist($playlist)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| playlist |  ``` Required ```  | playlist request object |



#### Example Usage

```php
$playlist = new PlaylistRequest();

$result = $playlists->postPlaylist($playlist);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | [Bad Request] Parameters missing or invalid. |
| 401 | [Unauthorized] Bearer token is missing, expired, or invalid. |
| 503 | [Service Unavailable] See response body for more detail. |



#### <a name="get_playlist_items"></a>![Method: ](http://apidocs.io/img/method.png ".PlaylistsController.getPlaylistItems") getPlaylistItems

> Get a list of a playlists's items.


```php
function getPlaylistItems(
        $playlistUid,
        $start = NULL,
        $count = NULL,
        $sort = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| playlistUid |  ``` Required ```  | Unique id related to a specific playlist. |
| start |  ``` Optional ```  | Starting point for partial responses, for folder requests. Default is 1. |
| count |  ``` Optional ```  | Maximum items to include in a paginated response, for folder requests.  Required if start is specified. |
| sort |  ``` Optional ```  | Specify sort order for response. Syntax is '{field}+{asc|desc}'.Valid values for 'field' are: name, versionCreated, size, extension, album, artist, captureDate, contentType, creationDate, genre, height, priority, title, timelineDate. |



#### Example Usage

```php
$playlistUid = 'playlistUid';
$start = 162;
$count = 162;
$sort = 'sort';

$result = $playlists->getPlaylistItems($playlistUid, $start, $count, $sort);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | [Unauthorized] Bearer token is missing, expired, or invalid. |
| 404 | [Not Found] Resource not found. |
| 503 | [Service Unavailable] See response body for more detail. |



#### <a name="get_playlists"></a>![Method: ](http://apidocs.io/img/method.png ".PlaylistsController.getPlaylists") getPlaylists

> Get a list of the user's playlists.


```php
function getPlaylists(
        $type = NULL,
        $start = NULL,
        $count = NULL,
        $sort = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| type |  ``` Optional ```  | The type of the playlist. Can be one of 'image', 'music', 'video' or 'image-video'. |
| start |  ``` Optional ```  | Starting point for partial responses, for folder requests. Default is 1. |
| count |  ``` Optional ```  | Maximum items to include in a paginated response, for folder requests.  Required if start is specified. |
| sort |  ``` Optional ```  | Specify sort order for response. Syntax is '{field}+{asc|desc}'. Valid values for 'field' are 'name' and 'creationDate'. |



#### Example Usage

```php
$type = 'type';
$start = 162;
$count = 162;
$sort = 'sort';

$result = $playlists->getPlaylists($type, $start, $count, $sort);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | [Bad Request] Query parameters missing or invalid. |
| 401 | [Unauthorized] Bearer token is missing, expired, or invalid. |
| 503 | [Service Unavailable] See response body for more detail. |



[Back to List of Controllers](#list_of_controllers)

### <a name="shares_controller"></a>![Class: ](http://apidocs.io/img/class.png ".SharesController") SharesController

#### Get singleton instance

The singleton instance of the ``` SharesController ``` class can be accessed from the API Client.

```php
$shares = $client->getShares();
```

#### <a name="delete_share"></a>![Method: ](http://apidocs.io/img/method.png ".SharesController.deleteShare") deleteShare

> Delete a share.


```php
function deleteShare($shareUid)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| shareUid |  ``` Required ```  | The unique ID of the share. |



#### Example Usage

```php
$shareUid = 'shareUid';

$shares->deleteShare($shareUid);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | [Unauthorized] Bearer token is missing, expired, or invalid. |
| 404 | [Not Found] Resource not found. |
| 503 | [Service Unavailable] See response body for more detail. |



#### <a name="create_share"></a>![Method: ](http://apidocs.io/img/method.png ".SharesController.createShare") createShare

> Create Share.


```php
function createShare($createShare)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| createShare |  ``` Required ```  | Allows a user to create a share |



#### Example Usage

```php
$createShare = new CreateShareRequest();

$result = $shares->createShare($createShare);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | [Bad Request] Parameters missing or invalid. |
| 401 | [Unauthorized] Bearer token is missing, expired, or invalid. |
| 503 | [Service Unavailable] See response body for more detail. |



#### <a name="list_shares"></a>![Method: ](http://apidocs.io/img/method.png ".SharesController.listShares") listShares

> List Shares.


```php
function listShares(
        $cursor = NULL,
        $filter = 'outbound',
        $since = NULL,
        $until = NULL,
        $count = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cursor |  ``` Optional ```  | A cursor used in paginating the response. Cursors are returned in 'next' and 'prev' links in the response body. |
| filter |  ``` Optional ```  ``` DefaultValue ```  | Filters the returned shares. Currently the value can only be 'outbound' (shared by the user). |
| since |  ``` Optional ```  | The date and time, expressed in the W3C date and time format, after which messages should be returned. |
| until |  ``` Optional ```  | The date and time, expressed in the W3C date and time format, up to which messages should be returned. |
| count |  ``` Optional ```  | Maximum items to include in a paginated response, for share requests. |



#### Example Usage

```php
$cursor = 'cursor';
$filter = 'outbound';
$since = 'since';
$until = 'until';
$count = 162;

$result = $shares->listShares($cursor, $filter, $since, $until, $count);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | [Bad Request] Parameters missing or any invalid parameter passed. |
| 401 | [Unauthorized] Bearer token is missing, expired, or invalid. |
| 503 | [Service Unavailable] See response body for more detail. |



[Back to List of Controllers](#list_of_controllers)

### <a name="tags_controller"></a>![Class: ](http://apidocs.io/img/class.png ".TagsController") TagsController

#### Get singleton instance

The singleton instance of the ``` TagsController ``` class can be accessed from the API Client.

```php
$tags = $client->getTags();
```

#### <a name="delete_tags"></a>![Method: ](http://apidocs.io/img/method.png ".TagsController.deleteTags") deleteTags

> Delete the tags on a file or folder.


```php
function deleteTags(
        $uri,
        $createVersion = false)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| uri |  ``` Required ```  | URI of the resource. This is a URI value obtained from a fullview or metadata response |
| createVersion |  ``` Optional ```  ``` DefaultValue ```  | If 'true', creates a new version of the file or folder. Defaults to 'false'. |



#### Example Usage

```php
$uri = 'uri';
$createVersion = false;

$tags->deleteTags($uri, $createVersion);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | [Bad Request] Query parameters missing or invalid. |
| 401 | [Unauthorized] Bearer token is missing, expired, or invalid. |
| 404 | [Not Found] File or folder was not found. |
| 503 | [Service Unavailable] See response body for more detail. |



#### <a name="update_tags"></a>![Method: ](http://apidocs.io/img/method.png ".TagsController.updateTags") updateTags

> Update the tags on a file or folder.


```php
function updateTags($updateTags)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| updateTags |  ``` Required ```  | Allows a user to update Tags on a file or folder |



#### Example Usage

```php
$updateTags = new UpdateTagsRequest();

$result = $tags->updateTags($updateTags);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | [Bad Request] Query parameters missing or invalid. |
| 401 | [Unauthorized] Bearer token is missing, expired, or invalid. |
| 404 | [Not Found] File or folder was not found. |
| 503 | [Service Unavailable] See response body for more detail. |



#### <a name="get_tags"></a>![Method: ](http://apidocs.io/img/method.png ".TagsController.getTags") getTags

> Get the list of tags on a file or folder.


```php
function getTags($path)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| path |  ``` Required ```  | The path to the file or folder for which tags need to be retrieved |



#### Example Usage

```php
$path = 'path';

$result = $tags->getTags($path);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | [Unauthorized] Bearer token is missing, expired, or invalid. |
| 404 | [Not Found] File or folder was not found. |
| 410 | [Gone] File or folder was removed. |
| 503 | [Service Unavailable] See response body for more detail. |



[Back to List of Controllers](#list_of_controllers)

### <a name="account_info_controller"></a>![Class: ](http://apidocs.io/img/class.png ".AccountInfoController") AccountInfoController

#### Get singleton instance

The singleton instance of the ``` AccountInfoController ``` class can be accessed from the API Client.

```php
$accountInfo = $client->getAccountInfo();
```

#### <a name="get_account"></a>![Method: ](http://apidocs.io/img/method.png ".AccountInfoController.getAccount") getAccount

> Retrieve quota usage details.


```php
function getAccount()
```

#### Example Usage

```php

$result = $accountInfo->getAccount();

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | [Bad Request] Query parameters missing or invalid. |
| 401 | [Unauthorized] Bearer token is missing, expired, or invalid. |
| 503 | [Service Unavailable] See response body for more detail. |



[Back to List of Controllers](#list_of_controllers)

### <a name="contacts_controller"></a>![Class: ](http://apidocs.io/img/class.png ".ContactsController") ContactsController

#### Get singleton instance

The singleton instance of the ``` ContactsController ``` class can be accessed from the API Client.

```php
$contacts = $client->getContacts();
```

#### <a name="get_contacts"></a>![Method: ](http://apidocs.io/img/method.png ".ContactsController.getContacts") getContacts

> Retrieves all contacts.


```php
function getContacts()
```

#### Example Usage

```php

$result = $contacts->getContacts();

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | [Unauthorized] Bearer token is missing, expired, or invalid. |
| 500 | Unexpected Account configuration. |
| 503 | [Service Unavailable] See response body for more detail. |



[Back to List of Controllers](#list_of_controllers)



