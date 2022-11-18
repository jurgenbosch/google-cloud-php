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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/networkmanagement/v1/reachability.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\NetworkManagement\V1\Gapic;

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
use Google\Cloud\NetworkManagement\V1\ConnectivityTest;
use Google\Cloud\NetworkManagement\V1\CreateConnectivityTestRequest;
use Google\Cloud\NetworkManagement\V1\DeleteConnectivityTestRequest;
use Google\Cloud\NetworkManagement\V1\GetConnectivityTestRequest;
use Google\Cloud\NetworkManagement\V1\ListConnectivityTestsRequest;
use Google\Cloud\NetworkManagement\V1\ListConnectivityTestsResponse;
use Google\Cloud\NetworkManagement\V1\RerunConnectivityTestRequest;
use Google\Cloud\NetworkManagement\V1\UpdateConnectivityTestRequest;
use Google\LongRunning\Operation;
use Google\Protobuf\FieldMask;

/**
 * Service Description: The Reachability service in the Google Cloud Network Management API provides
 * services that analyze the reachability within a single Google Virtual Private
 * Cloud (VPC) network, between peered VPC networks, between VPC and on-premises
 * networks, or between VPC networks and internet hosts. A reachability analysis
 * is based on Google Cloud network configurations.
 *
 * You can use the analysis results to verify these configurations and
 * to troubleshoot connectivity issues.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $reachabilityServiceClient = new ReachabilityServiceClient();
 * try {
 *     $parent = 'parent';
 *     $testId = 'test_id';
 *     $resource = new ConnectivityTest();
 *     $operationResponse = $reachabilityServiceClient->createConnectivityTest($parent, $testId, $resource);
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
 *     $operationResponse = $reachabilityServiceClient->createConnectivityTest($parent, $testId, $resource);
 *     $operationName = $operationResponse->getName();
 *     // ... do other work
 *     $newOperationResponse = $reachabilityServiceClient->resumeOperation($operationName, 'createConnectivityTest');
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
 *     $reachabilityServiceClient->close();
 * }
 * ```
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 */
class ReachabilityServiceGapicClient
{
    use GapicClientTrait;

    /** The name of the service. */
    const SERVICE_NAME = 'google.cloud.networkmanagement.v1.ReachabilityService';

    /** The default address of the service. */
    const SERVICE_ADDRESS = 'networkmanagement.googleapis.com';

    /** The default port of the service. */
    const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
    ];

    private static $connectivityTestNameTemplate;

    private static $pathTemplateMap;

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'serviceAddress' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/reachability_service_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/reachability_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/reachability_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/reachability_service_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getConnectivityTestNameTemplate()
    {
        if (self::$connectivityTestNameTemplate == null) {
            self::$connectivityTestNameTemplate = new PathTemplate('projects/{project}/locations/global/connectivityTests/{test}');
        }

        return self::$connectivityTestNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (self::$pathTemplateMap == null) {
            self::$pathTemplateMap = [
                'connectivityTest' => self::getConnectivityTestNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * connectivity_test resource.
     *
     * @param string $project
     * @param string $test
     *
     * @return string The formatted connectivity_test resource.
     */
    public static function connectivityTestName($project, $test)
    {
        return self::getConnectivityTestNameTemplate()->render([
            'project' => $project,
            'test' => $test,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - connectivityTest: projects/{project}/locations/global/connectivityTests/{test}
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
     *           as "<uri>:<port>". Default 'networkmanagement.googleapis.com:443'.
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
     * Creates a new Connectivity Test.
     * After you create a test, the reachability analysis is performed as part
     * of the long running operation, which completes when the analysis completes.
     *
     * If the endpoint specifications in `ConnectivityTest` are invalid
     * (for example, containing non-existent resources in the network, or you
     * don't have read permissions to the network configurations of listed
     * projects), then the reachability result returns a value of `UNKNOWN`.
     *
     * If the endpoint specifications in `ConnectivityTest` are
     * incomplete, the reachability result returns a value of
     * <code>AMBIGUOUS</code>. For more information,
     * see the Connectivity Test documentation.
     *
     * Sample code:
     * ```
     * $reachabilityServiceClient = new ReachabilityServiceClient();
     * try {
     *     $parent = 'parent';
     *     $testId = 'test_id';
     *     $resource = new ConnectivityTest();
     *     $operationResponse = $reachabilityServiceClient->createConnectivityTest($parent, $testId, $resource);
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
     *     $operationResponse = $reachabilityServiceClient->createConnectivityTest($parent, $testId, $resource);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $reachabilityServiceClient->resumeOperation($operationName, 'createConnectivityTest');
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
     *     $reachabilityServiceClient->close();
     * }
     * ```
     *
     * @param string           $parent       Required. The parent resource of the Connectivity Test to create:
     *                                       `projects/{project_id}/locations/global`
     * @param string           $testId       Required. The logical name of the Connectivity Test in your project
     *                                       with the following restrictions:
     *
     *                                       * Must contain only lowercase letters, numbers, and hyphens.
     *                                       * Must start with a letter.
     *                                       * Must be between 1-40 characters.
     *                                       * Must end with a number or a letter.
     *                                       * Must be unique within the customer project
     * @param ConnectivityTest $resource     Required. A `ConnectivityTest` resource
     * @param array            $optionalArgs {
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
    public function createConnectivityTest($parent, $testId, $resource, array $optionalArgs = [])
    {
        $request = new CreateConnectivityTestRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $request->setTestId($testId);
        $request->setResource($resource);
        $requestParamHeaders['parent'] = $parent;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startOperationsCall('CreateConnectivityTest', $optionalArgs, $request, $this->getOperationsClient())->wait();
    }

    /**
     * Deletes a specific `ConnectivityTest`.
     *
     * Sample code:
     * ```
     * $reachabilityServiceClient = new ReachabilityServiceClient();
     * try {
     *     $name = 'name';
     *     $operationResponse = $reachabilityServiceClient->deleteConnectivityTest($name);
     *     $operationResponse->pollUntilComplete();
     *     if ($operationResponse->operationSucceeded()) {
     *         // operation succeeded and returns no value
     *     } else {
     *         $error = $operationResponse->getError();
     *         // handleError($error)
     *     }
     *     // Alternatively:
     *     // start the operation, keep the operation name, and resume later
     *     $operationResponse = $reachabilityServiceClient->deleteConnectivityTest($name);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $reachabilityServiceClient->resumeOperation($operationName, 'deleteConnectivityTest');
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
     *     $reachabilityServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Connectivity Test resource name using the form:
     *                             `projects/{project_id}/locations/global/connectivityTests/{test_id}`
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
    public function deleteConnectivityTest($name, array $optionalArgs = [])
    {
        $request = new DeleteConnectivityTestRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startOperationsCall('DeleteConnectivityTest', $optionalArgs, $request, $this->getOperationsClient())->wait();
    }

    /**
     * Gets the details of a specific Connectivity Test.
     *
     * Sample code:
     * ```
     * $reachabilityServiceClient = new ReachabilityServiceClient();
     * try {
     *     $name = 'name';
     *     $response = $reachabilityServiceClient->getConnectivityTest($name);
     * } finally {
     *     $reachabilityServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. `ConnectivityTest` resource name using the form:
     *                             `projects/{project_id}/locations/global/connectivityTests/{test_id}`
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\NetworkManagement\V1\ConnectivityTest
     *
     * @throws ApiException if the remote call fails
     */
    public function getConnectivityTest($name, array $optionalArgs = [])
    {
        $request = new GetConnectivityTestRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('GetConnectivityTest', ConnectivityTest::class, $optionalArgs, $request)->wait();
    }

    /**
     * Lists all Connectivity Tests owned by a project.
     *
     * Sample code:
     * ```
     * $reachabilityServiceClient = new ReachabilityServiceClient();
     * try {
     *     $parent = 'parent';
     *     // Iterate over pages of elements
     *     $pagedResponse = $reachabilityServiceClient->listConnectivityTests($parent);
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *     // Alternatively:
     *     // Iterate through all elements
     *     $pagedResponse = $reachabilityServiceClient->listConnectivityTests($parent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $reachabilityServiceClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The parent resource of the Connectivity Tests:
     *                             `projects/{project_id}/locations/global`
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
     *     @type string $filter
     *           Lists the `ConnectivityTests` that match the filter expression. A filter
     *           expression filters the resources listed in the response. The expression
     *           must be of the form `<field> <operator> <value>` where operators: `<`, `>`,
     *           `<=`,
     *           `>=`,
     *           `!=`, `=`, `:` are supported (colon `:` represents a HAS operator which is
     *           roughly synonymous with equality). <field> can refer to a proto or JSON
     *           field, or a synthetic field. Field names can be camelCase or snake_case.
     *
     *           Examples:
     *           - Filter by name:
     *           name = "projects/proj-1/locations/global/connectivityTests/test-1
     *
     *           - Filter by labels:
     *           - Resources that have a key called `foo`
     *           labels.foo:*
     *           - Resources that have a key called `foo` whose value is `bar`
     *           labels.foo = bar
     *     @type string $orderBy
     *           Field to use to sort the list.
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
    public function listConnectivityTests($parent, array $optionalArgs = [])
    {
        $request = new ListConnectivityTestsRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $requestParamHeaders['parent'] = $parent;
        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }

        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        if (isset($optionalArgs['filter'])) {
            $request->setFilter($optionalArgs['filter']);
        }

        if (isset($optionalArgs['orderBy'])) {
            $request->setOrderBy($optionalArgs['orderBy']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->getPagedListResponse('ListConnectivityTests', $optionalArgs, ListConnectivityTestsResponse::class, $request);
    }

    /**
     * Rerun an existing `ConnectivityTest`.
     * After the user triggers the rerun, the reachability analysis is performed
     * as part of the long running operation, which completes when the analysis
     * completes.
     *
     * Even though the test configuration remains the same, the reachability
     * result may change due to underlying network configuration changes.
     *
     * If the endpoint specifications in `ConnectivityTest` become invalid (for
     * example, specified resources are deleted in the network, or you lost
     * read permissions to the network configurations of listed projects), then
     * the reachability result returns a value of `UNKNOWN`.
     *
     * Sample code:
     * ```
     * $reachabilityServiceClient = new ReachabilityServiceClient();
     * try {
     *     $name = 'name';
     *     $operationResponse = $reachabilityServiceClient->rerunConnectivityTest($name);
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
     *     $operationResponse = $reachabilityServiceClient->rerunConnectivityTest($name);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $reachabilityServiceClient->resumeOperation($operationName, 'rerunConnectivityTest');
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
     *     $reachabilityServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Connectivity Test resource name using the form:
     *                             `projects/{project_id}/locations/global/connectivityTests/{test_id}`
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
    public function rerunConnectivityTest($name, array $optionalArgs = [])
    {
        $request = new RerunConnectivityTestRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startOperationsCall('RerunConnectivityTest', $optionalArgs, $request, $this->getOperationsClient())->wait();
    }

    /**
     * Updates the configuration of an existing `ConnectivityTest`.
     * After you update a test, the reachability analysis is performed as part
     * of the long running operation, which completes when the analysis completes.
     * The Reachability state in the test resource is updated with the new result.
     *
     * If the endpoint specifications in `ConnectivityTest` are invalid
     * (for example, they contain non-existent resources in the network, or the
     * user does not have read permissions to the network configurations of
     * listed projects), then the reachability result returns a value of
     * <code>UNKNOWN</code>.
     *
     * If the endpoint specifications in `ConnectivityTest` are incomplete, the
     * reachability result returns a value of `AMBIGUOUS`. See the documentation
     * in `ConnectivityTest` for for more details.
     *
     * Sample code:
     * ```
     * $reachabilityServiceClient = new ReachabilityServiceClient();
     * try {
     *     $updateMask = new FieldMask();
     *     $resource = new ConnectivityTest();
     *     $operationResponse = $reachabilityServiceClient->updateConnectivityTest($updateMask, $resource);
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
     *     $operationResponse = $reachabilityServiceClient->updateConnectivityTest($updateMask, $resource);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $reachabilityServiceClient->resumeOperation($operationName, 'updateConnectivityTest');
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
     *     $reachabilityServiceClient->close();
     * }
     * ```
     *
     * @param FieldMask        $updateMask   Required. Mask of fields to update. At least one path must be supplied in
     *                                       this field.
     * @param ConnectivityTest $resource     Required. Only fields specified in update_mask are updated.
     * @param array            $optionalArgs {
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
    public function updateConnectivityTest($updateMask, $resource, array $optionalArgs = [])
    {
        $request = new UpdateConnectivityTestRequest();
        $requestParamHeaders = [];
        $request->setUpdateMask($updateMask);
        $request->setResource($resource);
        $requestParamHeaders['resource.name'] = $resource->getName();
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startOperationsCall('UpdateConnectivityTest', $optionalArgs, $request, $this->getOperationsClient())->wait();
    }
}
