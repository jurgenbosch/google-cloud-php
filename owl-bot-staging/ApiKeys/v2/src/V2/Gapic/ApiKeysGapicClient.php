<?php
/*
 * Copyright 2022 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/api/apikeys/v2/apikeys.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\ApiKeys\V2\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\LongRunning\OperationsClient;
use Google\ApiCore\OperationResponse;
use Google\ApiCore\PathTemplate;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\ApiKeys\V2\CreateKeyRequest;
use Google\Cloud\ApiKeys\V2\DeleteKeyRequest;
use Google\Cloud\ApiKeys\V2\GetKeyRequest;
use Google\Cloud\ApiKeys\V2\GetKeyStringRequest;
use Google\Cloud\ApiKeys\V2\GetKeyStringResponse;
use Google\Cloud\ApiKeys\V2\Key;
use Google\Cloud\ApiKeys\V2\ListKeysRequest;
use Google\Cloud\ApiKeys\V2\ListKeysResponse;
use Google\Cloud\ApiKeys\V2\LookupKeyRequest;
use Google\Cloud\ApiKeys\V2\LookupKeyResponse;
use Google\Cloud\ApiKeys\V2\UndeleteKeyRequest;
use Google\Cloud\ApiKeys\V2\UpdateKeyRequest;
use Google\LongRunning\Operation;
use Google\Protobuf\FieldMask;

/**
 * Service Description: Manages the API keys associated with projects.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $apiKeysClient = new ApiKeysClient();
 * try {
 *     $formattedParent = $apiKeysClient->locationName('[PROJECT]', '[LOCATION]');
 *     $key = new Key();
 *     $operationResponse = $apiKeysClient->createKey($formattedParent, $key);
 *     $operationResponse->pollUntilComplete();
 *     if ($operationResponse->operationSucceeded()) {
 *         $result = $operationResponse->getResult();
 *     // doSomethingWith($result)
 *     } else {
 *         $error = $operationResponse->getError();
 *         // handleError($error)
 *     }
 *     // Alternatively:
 *     // start the operation, keep the operation name, and resume later
 *     $operationResponse = $apiKeysClient->createKey($formattedParent, $key);
 *     $operationName = $operationResponse->getName();
 *     // ... do other work
 *     $newOperationResponse = $apiKeysClient->resumeOperation($operationName, 'createKey');
 *     while (!$newOperationResponse->isDone()) {
 *         // ... do other work
 *         $newOperationResponse->reload();
 *     }
 *     if ($newOperationResponse->operationSucceeded()) {
 *         $result = $newOperationResponse->getResult();
 *     // doSomethingWith($result)
 *     } else {
 *         $error = $newOperationResponse->getError();
 *         // handleError($error)
 *     }
 * } finally {
 *     $apiKeysClient->close();
 * }
 * ```
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 */
class ApiKeysGapicClient
{
    use GapicClientTrait;

    /** The name of the service. */
    const SERVICE_NAME = 'google.api.apikeys.v2.ApiKeys';

    /** The default address of the service. */
    const SERVICE_ADDRESS = 'apikeys.googleapis.com';

    /** The default port of the service. */
    const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
        'https://www.googleapis.com/auth/cloud-platform.read-only',
    ];

    private static $keyNameTemplate;

    private static $locationNameTemplate;

    private static $pathTemplateMap;

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'serviceAddress' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/api_keys_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/api_keys_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/api_keys_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/api_keys_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getKeyNameTemplate()
    {
        if (self::$keyNameTemplate == null) {
            self::$keyNameTemplate = new PathTemplate('projects/{project}/locations/{location}/keys/{key}');
        }

        return self::$keyNameTemplate;
    }

    private static function getLocationNameTemplate()
    {
        if (self::$locationNameTemplate == null) {
            self::$locationNameTemplate = new PathTemplate('projects/{project}/locations/{location}');
        }

        return self::$locationNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (self::$pathTemplateMap == null) {
            self::$pathTemplateMap = [
                'key' => self::getKeyNameTemplate(),
                'location' => self::getLocationNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent a key
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $key
     *
     * @return string The formatted key resource.
     */
    public static function keyName($project, $location, $key)
    {
        return self::getKeyNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'key' => $key,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a location
     * resource.
     *
     * @param string $project
     * @param string $location
     *
     * @return string The formatted location resource.
     */
    public static function locationName($project, $location)
    {
        return self::getLocationNameTemplate()->render([
            'project' => $project,
            'location' => $location,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - key: projects/{project}/locations/{location}/keys/{key}
     * - location: projects/{project}/locations/{location}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     */
    public static function parseName($formattedName, $template = null)
    {
        $templateMap = self::getPathTemplateMap();
        if ($template) {
            if (!isset($templateMap[$template])) {
                throw new ValidationException("Template name $template does not exist");
            }

            return $templateMap[$template]->match($formattedName);
        }

        foreach ($templateMap as $templateName => $pathTemplate) {
            try {
                return $pathTemplate->match($formattedName);
            } catch (ValidationException $ex) {
                // Swallow the exception to continue trying other path templates
            }
        }

        throw new ValidationException("Input did not match any known format. Input: $formattedName");
    }

    /**
     * Return an OperationsClient object with the same endpoint as $this.
     *
     * @return OperationsClient
     */
    public function getOperationsClient()
    {
        return $this->operationsClient;
    }

    /**
     * Resume an existing long running operation that was previously started by a long
     * running API method. If $methodName is not provided, or does not match a long
     * running API method, then the operation can still be resumed, but the
     * OperationResponse object will not deserialize the final response.
     *
     * @param string $operationName The name of the long running operation
     * @param string $methodName    The name of the method used to start the operation
     *
     * @return OperationResponse
     */
    public function resumeOperation($operationName, $methodName = null)
    {
        $options = isset($this->descriptors[$methodName]['longRunning']) ? $this->descriptors[$methodName]['longRunning'] : [];
        $operation = new OperationResponse($operationName, $this->getOperationsClient(), $options);
        $operation->reload();
        return $operation;
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $serviceAddress
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'apikeys.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $serviceAddress setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
        $this->operationsClient = $this->createOperationsClient($clientOptions);
    }

    /**
     * Creates a new API key.
     *
     * NOTE: Key is a global resource; hence the only supported value for
     * location is `global`.
     *
     * Sample code:
     * ```
     * $apiKeysClient = new ApiKeysClient();
     * try {
     *     $formattedParent = $apiKeysClient->locationName('[PROJECT]', '[LOCATION]');
     *     $key = new Key();
     *     $operationResponse = $apiKeysClient->createKey($formattedParent, $key);
     *     $operationResponse->pollUntilComplete();
     *     if ($operationResponse->operationSucceeded()) {
     *         $result = $operationResponse->getResult();
     *     // doSomethingWith($result)
     *     } else {
     *         $error = $operationResponse->getError();
     *         // handleError($error)
     *     }
     *     // Alternatively:
     *     // start the operation, keep the operation name, and resume later
     *     $operationResponse = $apiKeysClient->createKey($formattedParent, $key);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $apiKeysClient->resumeOperation($operationName, 'createKey');
     *     while (!$newOperationResponse->isDone()) {
     *         // ... do other work
     *         $newOperationResponse->reload();
     *     }
     *     if ($newOperationResponse->operationSucceeded()) {
     *         $result = $newOperationResponse->getResult();
     *     // doSomethingWith($result)
     *     } else {
     *         $error = $newOperationResponse->getError();
     *         // handleError($error)
     *     }
     * } finally {
     *     $apiKeysClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The project in which the API key is created.
     * @param Key    $key          Required. The API key fields to set at creation time.
     *                             You can configure only the `display_name`, `restrictions`, and
     *                             `annotations` fields.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type string $keyId
     *           User specified key id (optional). If specified, it will become the final
     *           component of the key resource name.
     *
     *           The id must be unique within the project, must conform with RFC-1034,
     *           is restricted to lower-cased letters, and has a maximum length of 63
     *           characters. In another word, the id must match the regular
     *           expression: `[a-z]([a-z0-9-]{0,61}[a-z0-9])?`.
     *
     *           The id must NOT be a UUID-like string.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\OperationResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function createKey($parent, $key, array $optionalArgs = [])
    {
        $request = new CreateKeyRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $request->setKey($key);
        $requestParamHeaders['parent'] = $parent;
        if (isset($optionalArgs['keyId'])) {
            $request->setKeyId($optionalArgs['keyId']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startOperationsCall('CreateKey', $optionalArgs, $request, $this->getOperationsClient())->wait();
    }

    /**
     * Deletes an API key. Deleted key can be retrieved within 30 days of
     * deletion. Afterward, key will be purged from the project.
     *
     * NOTE: Key is a global resource; hence the only supported value for
     * location is `global`.
     *
     * Sample code:
     * ```
     * $apiKeysClient = new ApiKeysClient();
     * try {
     *     $formattedName = $apiKeysClient->keyName('[PROJECT]', '[LOCATION]', '[KEY]');
     *     $operationResponse = $apiKeysClient->deleteKey($formattedName);
     *     $operationResponse->pollUntilComplete();
     *     if ($operationResponse->operationSucceeded()) {
     *         $result = $operationResponse->getResult();
     *     // doSomethingWith($result)
     *     } else {
     *         $error = $operationResponse->getError();
     *         // handleError($error)
     *     }
     *     // Alternatively:
     *     // start the operation, keep the operation name, and resume later
     *     $operationResponse = $apiKeysClient->deleteKey($formattedName);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $apiKeysClient->resumeOperation($operationName, 'deleteKey');
     *     while (!$newOperationResponse->isDone()) {
     *         // ... do other work
     *         $newOperationResponse->reload();
     *     }
     *     if ($newOperationResponse->operationSucceeded()) {
     *         $result = $newOperationResponse->getResult();
     *     // doSomethingWith($result)
     *     } else {
     *         $error = $newOperationResponse->getError();
     *         // handleError($error)
     *     }
     * } finally {
     *     $apiKeysClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The resource name of the API key to be deleted.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type string $etag
     *           Optional. The etag known to the client for the expected state of the key.
     *           This is to be used for optimistic concurrency.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\OperationResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function deleteKey($name, array $optionalArgs = [])
    {
        $request = new DeleteKeyRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        if (isset($optionalArgs['etag'])) {
            $request->setEtag($optionalArgs['etag']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startOperationsCall('DeleteKey', $optionalArgs, $request, $this->getOperationsClient())->wait();
    }

    /**
     * Gets the metadata for an API key. The key string of the API key
     * isn't included in the response.
     *
     * NOTE: Key is a global resource; hence the only supported value for
     * location is `global`.
     *
     * Sample code:
     * ```
     * $apiKeysClient = new ApiKeysClient();
     * try {
     *     $formattedName = $apiKeysClient->keyName('[PROJECT]', '[LOCATION]', '[KEY]');
     *     $response = $apiKeysClient->getKey($formattedName);
     * } finally {
     *     $apiKeysClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The resource name of the API key to get.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\ApiKeys\V2\Key
     *
     * @throws ApiException if the remote call fails
     */
    public function getKey($name, array $optionalArgs = [])
    {
        $request = new GetKeyRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('GetKey', Key::class, $optionalArgs, $request)->wait();
    }

    /**
     * Get the key string for an API key.
     *
     * NOTE: Key is a global resource; hence the only supported value for
     * location is `global`.
     *
     * Sample code:
     * ```
     * $apiKeysClient = new ApiKeysClient();
     * try {
     *     $formattedName = $apiKeysClient->keyName('[PROJECT]', '[LOCATION]', '[KEY]');
     *     $response = $apiKeysClient->getKeyString($formattedName);
     * } finally {
     *     $apiKeysClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The resource name of the API key to be retrieved.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\ApiKeys\V2\GetKeyStringResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function getKeyString($name, array $optionalArgs = [])
    {
        $request = new GetKeyStringRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('GetKeyString', GetKeyStringResponse::class, $optionalArgs, $request)->wait();
    }

    /**
     * Lists the API keys owned by a project. The key string of the API key
     * isn't included in the response.
     *
     * NOTE: Key is a global resource; hence the only supported value for
     * location is `global`.
     *
     * Sample code:
     * ```
     * $apiKeysClient = new ApiKeysClient();
     * try {
     *     $formattedParent = $apiKeysClient->locationName('[PROJECT]', '[LOCATION]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $apiKeysClient->listKeys($formattedParent);
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *     // Alternatively:
     *     // Iterate through all elements
     *     $pagedResponse = $apiKeysClient->listKeys($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $apiKeysClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. Lists all API keys associated with this project.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type int $pageSize
     *           The maximum number of resources contained in the underlying API
     *           response. The API may return fewer values in a page, even if
     *           there are additional values to be retrieved.
     *     @type string $pageToken
     *           A page token is used to specify a page of values to be returned.
     *           If no page token is specified (the default), the first page
     *           of values will be returned. Any page token used here must have
     *           been generated by a previous call to the API.
     *     @type bool $showDeleted
     *           Optional. Indicate that keys deleted in the past 30 days should also be
     *           returned.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\PagedListResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function listKeys($parent, array $optionalArgs = [])
    {
        $request = new ListKeysRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $requestParamHeaders['parent'] = $parent;
        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }

        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        if (isset($optionalArgs['showDeleted'])) {
            $request->setShowDeleted($optionalArgs['showDeleted']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->getPagedListResponse('ListKeys', $optionalArgs, ListKeysResponse::class, $request);
    }

    /**
     * Find the parent project and resource name of the API
     * key that matches the key string in the request. If the API key has been
     * purged, resource name will not be set.
     * The service account must have the `apikeys.keys.lookup` permission
     * on the parent project.
     *
     * Sample code:
     * ```
     * $apiKeysClient = new ApiKeysClient();
     * try {
     *     $keyString = 'key_string';
     *     $response = $apiKeysClient->lookupKey($keyString);
     * } finally {
     *     $apiKeysClient->close();
     * }
     * ```
     *
     * @param string $keyString    Required. Finds the project that owns the key string value.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\ApiKeys\V2\LookupKeyResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function lookupKey($keyString, array $optionalArgs = [])
    {
        $request = new LookupKeyRequest();
        $request->setKeyString($keyString);
        return $this->startCall('LookupKey', LookupKeyResponse::class, $optionalArgs, $request)->wait();
    }

    /**
     * Undeletes an API key which was deleted within 30 days.
     *
     * NOTE: Key is a global resource; hence the only supported value for
     * location is `global`.
     *
     * Sample code:
     * ```
     * $apiKeysClient = new ApiKeysClient();
     * try {
     *     $formattedName = $apiKeysClient->keyName('[PROJECT]', '[LOCATION]', '[KEY]');
     *     $operationResponse = $apiKeysClient->undeleteKey($formattedName);
     *     $operationResponse->pollUntilComplete();
     *     if ($operationResponse->operationSucceeded()) {
     *         $result = $operationResponse->getResult();
     *     // doSomethingWith($result)
     *     } else {
     *         $error = $operationResponse->getError();
     *         // handleError($error)
     *     }
     *     // Alternatively:
     *     // start the operation, keep the operation name, and resume later
     *     $operationResponse = $apiKeysClient->undeleteKey($formattedName);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $apiKeysClient->resumeOperation($operationName, 'undeleteKey');
     *     while (!$newOperationResponse->isDone()) {
     *         // ... do other work
     *         $newOperationResponse->reload();
     *     }
     *     if ($newOperationResponse->operationSucceeded()) {
     *         $result = $newOperationResponse->getResult();
     *     // doSomethingWith($result)
     *     } else {
     *         $error = $newOperationResponse->getError();
     *         // handleError($error)
     *     }
     * } finally {
     *     $apiKeysClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The resource name of the API key to be undeleted.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\OperationResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function undeleteKey($name, array $optionalArgs = [])
    {
        $request = new UndeleteKeyRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startOperationsCall('UndeleteKey', $optionalArgs, $request, $this->getOperationsClient())->wait();
    }

    /**
     * Patches the modifiable fields of an API key.
     * The key string of the API key isn't included in the response.
     *
     * NOTE: Key is a global resource; hence the only supported value for
     * location is `global`.
     *
     * Sample code:
     * ```
     * $apiKeysClient = new ApiKeysClient();
     * try {
     *     $key = new Key();
     *     $operationResponse = $apiKeysClient->updateKey($key);
     *     $operationResponse->pollUntilComplete();
     *     if ($operationResponse->operationSucceeded()) {
     *         $result = $operationResponse->getResult();
     *     // doSomethingWith($result)
     *     } else {
     *         $error = $operationResponse->getError();
     *         // handleError($error)
     *     }
     *     // Alternatively:
     *     // start the operation, keep the operation name, and resume later
     *     $operationResponse = $apiKeysClient->updateKey($key);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $apiKeysClient->resumeOperation($operationName, 'updateKey');
     *     while (!$newOperationResponse->isDone()) {
     *         // ... do other work
     *         $newOperationResponse->reload();
     *     }
     *     if ($newOperationResponse->operationSucceeded()) {
     *         $result = $newOperationResponse->getResult();
     *     // doSomethingWith($result)
     *     } else {
     *         $error = $newOperationResponse->getError();
     *         // handleError($error)
     *     }
     * } finally {
     *     $apiKeysClient->close();
     * }
     * ```
     *
     * @param Key   $key          Required. Set the `name` field to the resource name of the API key to be
     *                            updated. You can update only the `display_name`, `restrictions`, and
     *                            `annotations` fields.
     * @param array $optionalArgs {
     *     Optional.
     *
     *     @type FieldMask $updateMask
     *           The field mask specifies which fields to be updated as part of this
     *           request. All other fields are ignored.
     *           Mutable fields are: `display_name`, `restrictions`, and `annotations`.
     *           If an update mask is not provided, the service treats it as an implied mask
     *           equivalent to all allowed fields that are set on the wire. If the field
     *           mask has a special value "*", the service treats it equivalent to replace
     *           all allowed mutable fields.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\OperationResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function updateKey($key, array $optionalArgs = [])
    {
        $request = new UpdateKeyRequest();
        $requestParamHeaders = [];
        $request->setKey($key);
        $requestParamHeaders['key.name'] = $key->getName();
        if (isset($optionalArgs['updateMask'])) {
            $request->setUpdateMask($optionalArgs['updateMask']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startOperationsCall('UpdateKey', $optionalArgs, $request, $this->getOperationsClient())->wait();
    }
}
