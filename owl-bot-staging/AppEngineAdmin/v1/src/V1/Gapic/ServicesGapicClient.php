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
 * https://github.com/googleapis/googleapis/blob/master/google/appengine/v1/appengine.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\AppEngine\V1\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\LongRunning\OperationsClient;
use Google\ApiCore\OperationResponse;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\AppEngine\V1\DeleteServiceRequest;
use Google\Cloud\AppEngine\V1\GetServiceRequest;
use Google\Cloud\AppEngine\V1\ListServicesRequest;
use Google\Cloud\AppEngine\V1\ListServicesResponse;
use Google\Cloud\AppEngine\V1\Service;
use Google\Cloud\AppEngine\V1\UpdateServiceRequest;
use Google\LongRunning\Operation;
use Google\Protobuf\FieldMask;

/**
 * Service Description: Manages services of an application.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $servicesClient = new ServicesClient();
 * try {
 *     $operationResponse = $servicesClient->deleteService();
 *     $operationResponse->pollUntilComplete();
 *     if ($operationResponse->operationSucceeded()) {
 *         // operation succeeded and returns no value
 *     } else {
 *         $error = $operationResponse->getError();
 *         // handleError($error)
 *     }
 *     // Alternatively:
 *     // start the operation, keep the operation name, and resume later
 *     $operationResponse = $servicesClient->deleteService();
 *     $operationName = $operationResponse->getName();
 *     // ... do other work
 *     $newOperationResponse = $servicesClient->resumeOperation($operationName, 'deleteService');
 *     while (!$newOperationResponse->isDone()) {
 *         // ... do other work
 *         $newOperationResponse->reload();
 *     }
 *     if ($newOperationResponse->operationSucceeded()) {
 *         // operation succeeded and returns no value
 *     } else {
 *         $error = $newOperationResponse->getError();
 *         // handleError($error)
 *     }
 * } finally {
 *     $servicesClient->close();
 * }
 * ```
 */
class ServicesGapicClient
{
    use GapicClientTrait;

    /** The name of the service. */
    const SERVICE_NAME = 'google.appengine.v1.Services';

    /** The default address of the service. */
    const SERVICE_ADDRESS = 'appengine.googleapis.com';

    /** The default port of the service. */
    const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/appengine.admin',
        'https://www.googleapis.com/auth/cloud-platform',
        'https://www.googleapis.com/auth/cloud-platform.read-only',
    ];

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'serviceAddress' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/services_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/services_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/services_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/services_rest_client_config.php',
                ],
            ],
        ];
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
     *           as "<uri>:<port>". Default 'appengine.googleapis.com:443'.
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
     * Deletes the specified service and all enclosed versions.
     *
     * Sample code:
     * ```
     * $servicesClient = new ServicesClient();
     * try {
     *     $operationResponse = $servicesClient->deleteService();
     *     $operationResponse->pollUntilComplete();
     *     if ($operationResponse->operationSucceeded()) {
     *         // operation succeeded and returns no value
     *     } else {
     *         $error = $operationResponse->getError();
     *         // handleError($error)
     *     }
     *     // Alternatively:
     *     // start the operation, keep the operation name, and resume later
     *     $operationResponse = $servicesClient->deleteService();
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $servicesClient->resumeOperation($operationName, 'deleteService');
     *     while (!$newOperationResponse->isDone()) {
     *         // ... do other work
     *         $newOperationResponse->reload();
     *     }
     *     if ($newOperationResponse->operationSucceeded()) {
     *         // operation succeeded and returns no value
     *     } else {
     *         $error = $newOperationResponse->getError();
     *         // handleError($error)
     *     }
     * } finally {
     *     $servicesClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *     Optional.
     *
     *     @type string $name
     *           Name of the resource requested. Example: `apps/myapp/services/default`.
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
    public function deleteService(array $optionalArgs = [])
    {
        $request = new DeleteServiceRequest();
        $requestParamHeaders = [];
        if (isset($optionalArgs['name'])) {
            $request->setName($optionalArgs['name']);
            $requestParamHeaders['name'] = $optionalArgs['name'];
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startOperationsCall('DeleteService', $optionalArgs, $request, $this->getOperationsClient())->wait();
    }

    /**
     * Gets the current configuration of the specified service.
     *
     * Sample code:
     * ```
     * $servicesClient = new ServicesClient();
     * try {
     *     $response = $servicesClient->getService();
     * } finally {
     *     $servicesClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *     Optional.
     *
     *     @type string $name
     *           Name of the resource requested. Example: `apps/myapp/services/default`.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\AppEngine\V1\Service
     *
     * @throws ApiException if the remote call fails
     */
    public function getService(array $optionalArgs = [])
    {
        $request = new GetServiceRequest();
        $requestParamHeaders = [];
        if (isset($optionalArgs['name'])) {
            $request->setName($optionalArgs['name']);
            $requestParamHeaders['name'] = $optionalArgs['name'];
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('GetService', Service::class, $optionalArgs, $request)->wait();
    }

    /**
     * Lists all the services in the application.
     *
     * Sample code:
     * ```
     * $servicesClient = new ServicesClient();
     * try {
     *     // Iterate over pages of elements
     *     $pagedResponse = $servicesClient->listServices();
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *     // Alternatively:
     *     // Iterate through all elements
     *     $pagedResponse = $servicesClient->listServices();
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $servicesClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *     Optional.
     *
     *     @type string $parent
     *           Name of the parent Application resource. Example: `apps/myapp`.
     *     @type int $pageSize
     *           The maximum number of resources contained in the underlying API
     *           response. The API may return fewer values in a page, even if
     *           there are additional values to be retrieved.
     *     @type string $pageToken
     *           A page token is used to specify a page of values to be returned.
     *           If no page token is specified (the default), the first page
     *           of values will be returned. Any page token used here must have
     *           been generated by a previous call to the API.
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
    public function listServices(array $optionalArgs = [])
    {
        $request = new ListServicesRequest();
        $requestParamHeaders = [];
        if (isset($optionalArgs['parent'])) {
            $request->setParent($optionalArgs['parent']);
            $requestParamHeaders['parent'] = $optionalArgs['parent'];
        }

        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }

        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->getPagedListResponse('ListServices', $optionalArgs, ListServicesResponse::class, $request);
    }

    /**
     * Updates the configuration of the specified service.
     *
     * Sample code:
     * ```
     * $servicesClient = new ServicesClient();
     * try {
     *     $operationResponse = $servicesClient->updateService();
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
     *     $operationResponse = $servicesClient->updateService();
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $servicesClient->resumeOperation($operationName, 'updateService');
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
     *     $servicesClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *     Optional.
     *
     *     @type string $name
     *           Name of the resource to update. Example: `apps/myapp/services/default`.
     *     @type Service $service
     *           A Service resource containing the updated service. Only fields set in the
     *           field mask will be updated.
     *     @type FieldMask $updateMask
     *           Required. Standard field mask for the set of fields to be updated.
     *     @type bool $migrateTraffic
     *           Set to `true` to gradually shift traffic to one or more versions that you
     *           specify. By default, traffic is shifted immediately.
     *           For gradual traffic migration, the target versions
     *           must be located within instances that are configured for both
     *           [warmup requests](https://cloud.google.com/appengine/docs/admin-api/reference/rest/v1/apps.services.versions#InboundServiceType)
     *           and
     *           [automatic scaling](https://cloud.google.com/appengine/docs/admin-api/reference/rest/v1/apps.services.versions#AutomaticScaling).
     *           You must specify the
     *           [`shardBy`](https://cloud.google.com/appengine/docs/admin-api/reference/rest/v1/apps.services#ShardBy)
     *           field in the Service resource. Gradual traffic migration is not
     *           supported in the App Engine flexible environment. For examples, see
     *           [Migrating and Splitting Traffic](https://cloud.google.com/appengine/docs/admin-api/migrating-splitting-traffic).
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
    public function updateService(array $optionalArgs = [])
    {
        $request = new UpdateServiceRequest();
        $requestParamHeaders = [];
        if (isset($optionalArgs['name'])) {
            $request->setName($optionalArgs['name']);
            $requestParamHeaders['name'] = $optionalArgs['name'];
        }

        if (isset($optionalArgs['service'])) {
            $request->setService($optionalArgs['service']);
        }

        if (isset($optionalArgs['updateMask'])) {
            $request->setUpdateMask($optionalArgs['updateMask']);
        }

        if (isset($optionalArgs['migrateTraffic'])) {
            $request->setMigrateTraffic($optionalArgs['migrateTraffic']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startOperationsCall('UpdateService', $optionalArgs, $request, $this->getOperationsClient())->wait();
    }
}
