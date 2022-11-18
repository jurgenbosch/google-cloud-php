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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/retail/v2/control_service.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Retail\V2\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PathTemplate;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Retail\V2\Control;
use Google\Cloud\Retail\V2\CreateControlRequest;
use Google\Cloud\Retail\V2\DeleteControlRequest;
use Google\Cloud\Retail\V2\GetControlRequest;
use Google\Cloud\Retail\V2\ListControlsRequest;
use Google\Cloud\Retail\V2\ListControlsResponse;
use Google\Cloud\Retail\V2\UpdateControlRequest;
use Google\Protobuf\FieldMask;
use Google\Protobuf\GPBEmpty;

/**
 * Service Description: Service for modifying Control.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $controlServiceClient = new ControlServiceClient();
 * try {
 *     $formattedParent = $controlServiceClient->catalogName('[PROJECT]', '[LOCATION]', '[CATALOG]');
 *     $control = new Control();
 *     $controlId = 'control_id';
 *     $response = $controlServiceClient->createControl($formattedParent, $control, $controlId);
 * } finally {
 *     $controlServiceClient->close();
 * }
 * ```
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 */
class ControlServiceGapicClient
{
    use GapicClientTrait;

    /** The name of the service. */
    const SERVICE_NAME = 'google.cloud.retail.v2.ControlService';

    /** The default address of the service. */
    const SERVICE_ADDRESS = 'retail.googleapis.com';

    /** The default port of the service. */
    const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
    ];

    private static $catalogNameTemplate;

    private static $controlNameTemplate;

    private static $pathTemplateMap;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'serviceAddress' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/control_service_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/control_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/control_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/control_service_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getCatalogNameTemplate()
    {
        if (self::$catalogNameTemplate == null) {
            self::$catalogNameTemplate = new PathTemplate('projects/{project}/locations/{location}/catalogs/{catalog}');
        }

        return self::$catalogNameTemplate;
    }

    private static function getControlNameTemplate()
    {
        if (self::$controlNameTemplate == null) {
            self::$controlNameTemplate = new PathTemplate('projects/{project}/locations/{location}/catalogs/{catalog}/controls/{control}');
        }

        return self::$controlNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (self::$pathTemplateMap == null) {
            self::$pathTemplateMap = [
                'catalog' => self::getCatalogNameTemplate(),
                'control' => self::getControlNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent a catalog
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $catalog
     *
     * @return string The formatted catalog resource.
     */
    public static function catalogName($project, $location, $catalog)
    {
        return self::getCatalogNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'catalog' => $catalog,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a control
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $catalog
     * @param string $control
     *
     * @return string The formatted control resource.
     */
    public static function controlName($project, $location, $catalog, $control)
    {
        return self::getControlNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'catalog' => $catalog,
            'control' => $control,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - catalog: projects/{project}/locations/{location}/catalogs/{catalog}
     * - control: projects/{project}/locations/{location}/catalogs/{catalog}/controls/{control}
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
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $serviceAddress
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'retail.googleapis.com:443'.
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
    }

    /**
     * Creates a Control.
     *
     * If the [Control][google.cloud.retail.v2.Control] to create already exists,
     * an ALREADY_EXISTS error is returned.
     *
     * Sample code:
     * ```
     * $controlServiceClient = new ControlServiceClient();
     * try {
     *     $formattedParent = $controlServiceClient->catalogName('[PROJECT]', '[LOCATION]', '[CATALOG]');
     *     $control = new Control();
     *     $controlId = 'control_id';
     *     $response = $controlServiceClient->createControl($formattedParent, $control, $controlId);
     * } finally {
     *     $controlServiceClient->close();
     * }
     * ```
     *
     * @param string  $parent       Required. Full resource name of parent catalog. Format:
     *                              `projects/{project_number}/locations/{location_id}/catalogs/{catalog_id}`
     * @param Control $control      Required. The Control to create.
     * @param string  $controlId    Required. The ID to use for the Control, which will become the final
     *                              component of the Control's resource name.
     *
     *                              This value should be 4-63 characters, and valid characters
     *                              are /[a-z][0-9]-_/.
     * @param array   $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Retail\V2\Control
     *
     * @throws ApiException if the remote call fails
     */
    public function createControl($parent, $control, $controlId, array $optionalArgs = [])
    {
        $request = new CreateControlRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $request->setControl($control);
        $request->setControlId($controlId);
        $requestParamHeaders['parent'] = $parent;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('CreateControl', Control::class, $optionalArgs, $request)->wait();
    }

    /**
     * Deletes a Control.
     *
     * If the [Control][google.cloud.retail.v2.Control] to delete does not exist,
     * a NOT_FOUND error is returned.
     *
     * Sample code:
     * ```
     * $controlServiceClient = new ControlServiceClient();
     * try {
     *     $formattedName = $controlServiceClient->controlName('[PROJECT]', '[LOCATION]', '[CATALOG]', '[CONTROL]');
     *     $controlServiceClient->deleteControl($formattedName);
     * } finally {
     *     $controlServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The resource name of the Control to delete. Format:
     *                             `projects/{project_number}/locations/{location_id}/catalogs/{catalog_id}/controls/{control_id}`
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @throws ApiException if the remote call fails
     */
    public function deleteControl($name, array $optionalArgs = [])
    {
        $request = new DeleteControlRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('DeleteControl', GPBEmpty::class, $optionalArgs, $request)->wait();
    }

    /**
     * Gets a Control.
     *
     * Sample code:
     * ```
     * $controlServiceClient = new ControlServiceClient();
     * try {
     *     $formattedName = $controlServiceClient->controlName('[PROJECT]', '[LOCATION]', '[CATALOG]', '[CONTROL]');
     *     $response = $controlServiceClient->getControl($formattedName);
     * } finally {
     *     $controlServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The resource name of the Control to get. Format:
     *                             `projects/{project_number}/locations/{location_id}/catalogs/{catalog_id}/controls/{control_id}`
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Retail\V2\Control
     *
     * @throws ApiException if the remote call fails
     */
    public function getControl($name, array $optionalArgs = [])
    {
        $request = new GetControlRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('GetControl', Control::class, $optionalArgs, $request)->wait();
    }

    /**
     * Lists all Controls by their parent
     * [Catalog][google.cloud.retail.v2.Catalog].
     *
     * Sample code:
     * ```
     * $controlServiceClient = new ControlServiceClient();
     * try {
     *     $formattedParent = $controlServiceClient->catalogName('[PROJECT]', '[LOCATION]', '[CATALOG]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $controlServiceClient->listControls($formattedParent);
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *     // Alternatively:
     *     // Iterate through all elements
     *     $pagedResponse = $controlServiceClient->listControls($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $controlServiceClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The catalog resource name. Format:
     *                             `projects/{project_number}/locations/{location_id}/catalogs/{catalog_id}`
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
     *           Optional. A filter to apply on the list results. Supported features:
     *
     *           * List all the products under the parent branch if
     *           [filter][google.cloud.retail.v2.ListControlsRequest.filter] is unset.
     *           * List controls that are used in a single ServingConfig:
     *           'serving_config = "boosted_home_page_cvr"'
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
    public function listControls($parent, array $optionalArgs = [])
    {
        $request = new ListControlsRequest();
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

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->getPagedListResponse('ListControls', $optionalArgs, ListControlsResponse::class, $request);
    }

    /**
     * Updates a Control.
     *
     * [Control][google.cloud.retail.v2.Control] cannot be set to a different
     * oneof field, if so an INVALID_ARGUMENT is returned. If the
     * [Control][google.cloud.retail.v2.Control] to update does not exist, a
     * NOT_FOUND error is returned.
     *
     * Sample code:
     * ```
     * $controlServiceClient = new ControlServiceClient();
     * try {
     *     $control = new Control();
     *     $response = $controlServiceClient->updateControl($control);
     * } finally {
     *     $controlServiceClient->close();
     * }
     * ```
     *
     * @param Control $control      Required. The Control to update.
     * @param array   $optionalArgs {
     *     Optional.
     *
     *     @type FieldMask $updateMask
     *           Indicates which fields in the provided
     *           [Control][google.cloud.retail.v2.Control] to update. The following are NOT
     *           supported:
     *
     *           * [Control.name][google.cloud.retail.v2.Control.name]
     *
     *           If not set or empty, all supported fields are updated.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Retail\V2\Control
     *
     * @throws ApiException if the remote call fails
     */
    public function updateControl($control, array $optionalArgs = [])
    {
        $request = new UpdateControlRequest();
        $requestParamHeaders = [];
        $request->setControl($control);
        $requestParamHeaders['control.name'] = $control->getName();
        if (isset($optionalArgs['updateMask'])) {
            $request->setUpdateMask($optionalArgs['updateMask']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('UpdateControl', Control::class, $optionalArgs, $request)->wait();
    }
}
