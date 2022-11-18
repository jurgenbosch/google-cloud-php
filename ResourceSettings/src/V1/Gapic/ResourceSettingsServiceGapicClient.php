<?php
/*
 * Copyright 2021 Google LLC
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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/resourcesettings/v1/resource_settings.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\ResourceSettings\V1\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PathTemplate;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\ResourceSettings\V1\GetSettingRequest;
use Google\Cloud\ResourceSettings\V1\ListSettingsRequest;
use Google\Cloud\ResourceSettings\V1\ListSettingsResponse;
use Google\Cloud\ResourceSettings\V1\Setting;
use Google\Cloud\ResourceSettings\V1\SettingView;
use Google\Cloud\ResourceSettings\V1\UpdateSettingRequest;

/**
 * Service Description: An interface to interact with resource settings and setting values throughout
 * the resource hierarchy.
 *
 * Services may surface a number of settings for users to control how their
 * resources behave. Values of settings applied on a given Cloud resource are
 * evaluated hierarchically and inherited by all descendants of that resource.
 *
 * For all requests, returns a `google.rpc.Status` with
 * `google.rpc.Code.PERMISSION_DENIED` if the IAM check fails or the `parent`
 * resource is not in a Cloud Organization.
 * For all requests, returns a `google.rpc.Status` with
 * `google.rpc.Code.INVALID_ARGUMENT` if the request is malformed.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $resourceSettingsServiceClient = new ResourceSettingsServiceClient();
 * try {
 *     $formattedName = $resourceSettingsServiceClient->settingName('[PROJECT_NUMBER]', '[SETTING_NAME]');
 *     $response = $resourceSettingsServiceClient->getSetting($formattedName);
 * } finally {
 *     $resourceSettingsServiceClient->close();
 * }
 * ```
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 */
class ResourceSettingsServiceGapicClient
{
    use GapicClientTrait;

    /** The name of the service. */
    const SERVICE_NAME = 'google.cloud.resourcesettings.v1.ResourceSettingsService';

    /** The default address of the service. */
    const SERVICE_ADDRESS = 'resourcesettings.googleapis.com';

    /** The default port of the service. */
    const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
    ];

    private static $folderSettingNameNameTemplate;

    private static $organizationSettingNameNameTemplate;

    private static $projectNumberSettingNameNameTemplate;

    private static $settingNameTemplate;

    private static $pathTemplateMap;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' =>
                self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' =>
                __DIR__ .
                '/../resources/resource_settings_service_client_config.json',
            'descriptorsConfigPath' =>
                __DIR__ .
                '/../resources/resource_settings_service_descriptor_config.php',
            'gcpApiConfigPath' =>
                __DIR__ .
                '/../resources/resource_settings_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' =>
                        __DIR__ .
                        '/../resources/resource_settings_service_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getFolderSettingNameNameTemplate()
    {
        if (self::$folderSettingNameNameTemplate == null) {
            self::$folderSettingNameNameTemplate = new PathTemplate(
                'folders/{folder}/settings/{setting_name}'
            );
        }

        return self::$folderSettingNameNameTemplate;
    }

    private static function getOrganizationSettingNameNameTemplate()
    {
        if (self::$organizationSettingNameNameTemplate == null) {
            self::$organizationSettingNameNameTemplate = new PathTemplate(
                'organizations/{organization}/settings/{setting_name}'
            );
        }

        return self::$organizationSettingNameNameTemplate;
    }

    private static function getProjectNumberSettingNameNameTemplate()
    {
        if (self::$projectNumberSettingNameNameTemplate == null) {
            self::$projectNumberSettingNameNameTemplate = new PathTemplate(
                'projects/{project_number}/settings/{setting_name}'
            );
        }

        return self::$projectNumberSettingNameNameTemplate;
    }

    private static function getSettingNameTemplate()
    {
        if (self::$settingNameTemplate == null) {
            self::$settingNameTemplate = new PathTemplate(
                'projects/{project_number}/settings/{setting_name}'
            );
        }

        return self::$settingNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (self::$pathTemplateMap == null) {
            self::$pathTemplateMap = [
                'folderSettingName' => self::getFolderSettingNameNameTemplate(),
                'organizationSettingName' => self::getOrganizationSettingNameNameTemplate(),
                'projectNumberSettingName' => self::getProjectNumberSettingNameNameTemplate(),
                'setting' => self::getSettingNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * folder_setting_name resource.
     *
     * @param string $folder
     * @param string $settingName
     *
     * @return string The formatted folder_setting_name resource.
     */
    public static function folderSettingNameName($folder, $settingName)
    {
        return self::getFolderSettingNameNameTemplate()->render([
            'folder' => $folder,
            'setting_name' => $settingName,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * organization_setting_name resource.
     *
     * @param string $organization
     * @param string $settingName
     *
     * @return string The formatted organization_setting_name resource.
     */
    public static function organizationSettingNameName(
        $organization,
        $settingName
    ) {
        return self::getOrganizationSettingNameNameTemplate()->render([
            'organization' => $organization,
            'setting_name' => $settingName,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_number_setting_name resource.
     *
     * @param string $projectNumber
     * @param string $settingName
     *
     * @return string The formatted project_number_setting_name resource.
     */
    public static function projectNumberSettingNameName(
        $projectNumber,
        $settingName
    ) {
        return self::getProjectNumberSettingNameNameTemplate()->render([
            'project_number' => $projectNumber,
            'setting_name' => $settingName,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a setting
     * resource.
     *
     * @param string $projectNumber
     * @param string $settingName
     *
     * @return string The formatted setting resource.
     */
    public static function settingName($projectNumber, $settingName)
    {
        return self::getSettingNameTemplate()->render([
            'project_number' => $projectNumber,
            'setting_name' => $settingName,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - folderSettingName: folders/{folder}/settings/{setting_name}
     * - organizationSettingName: organizations/{organization}/settings/{setting_name}
     * - projectNumberSettingName: projects/{project_number}/settings/{setting_name}
     * - setting: projects/{project_number}/settings/{setting_name}
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
                throw new ValidationException(
                    "Template name $template does not exist"
                );
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

        throw new ValidationException(
            "Input did not match any known format. Input: $formattedName"
        );
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $serviceAddress
     *           **Deprecated**. This option will be removed in a future major release. Please
     *           utilize the `$apiEndpoint` option instead.
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'resourcesettings.googleapis.com:443'.
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
     * Gets a setting.
     *
     * Returns a `google.rpc.Status` with `google.rpc.Code.NOT_FOUND` if the
     * setting does not exist.
     *
     * Sample code:
     * ```
     * $resourceSettingsServiceClient = new ResourceSettingsServiceClient();
     * try {
     *     $formattedName = $resourceSettingsServiceClient->settingName('[PROJECT_NUMBER]', '[SETTING_NAME]');
     *     $response = $resourceSettingsServiceClient->getSetting($formattedName);
     * } finally {
     *     $resourceSettingsServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The name of the setting to get. See [Setting][google.cloud.resourcesettings.v1.Setting] for naming
     *                             requirements.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type int $view
     *           The SettingView for this request.
     *           For allowed values, use constants defined on {@see \Google\Cloud\ResourceSettings\V1\SettingView}
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\ResourceSettings\V1\Setting
     *
     * @throws ApiException if the remote call fails
     */
    public function getSetting($name, array $optionalArgs = [])
    {
        $request = new GetSettingRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        if (isset($optionalArgs['view'])) {
            $request->setView($optionalArgs['view']);
        }

        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->startCall(
            'GetSetting',
            Setting::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Lists all the settings that are available on the Cloud resource `parent`.
     *
     * Sample code:
     * ```
     * $resourceSettingsServiceClient = new ResourceSettingsServiceClient();
     * try {
     *     $parent = 'parent';
     *     // Iterate over pages of elements
     *     $pagedResponse = $resourceSettingsServiceClient->listSettings($parent);
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *     // Alternatively:
     *     // Iterate through all elements
     *     $pagedResponse = $resourceSettingsServiceClient->listSettings($parent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $resourceSettingsServiceClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The Cloud resource that parents the setting. Must be in one of the
     *                             following forms:
     *
     *                             * `projects/{project_number}`
     *                             * `projects/{project_id}`
     *                             * `folders/{folder_id}`
     *                             * `organizations/{organization_id}`
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
     *     @type int $view
     *           The SettingView for this request.
     *           For allowed values, use constants defined on {@see \Google\Cloud\ResourceSettings\V1\SettingView}
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
    public function listSettings($parent, array $optionalArgs = [])
    {
        $request = new ListSettingsRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $requestParamHeaders['parent'] = $parent;
        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }

        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        if (isset($optionalArgs['view'])) {
            $request->setView($optionalArgs['view']);
        }

        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->getPagedListResponse(
            'ListSettings',
            $optionalArgs,
            ListSettingsResponse::class,
            $request
        );
    }

    /**
     * Updates a setting.
     *
     * Returns a `google.rpc.Status` with `google.rpc.Code.NOT_FOUND` if the
     * setting does not exist.
     * Returns a `google.rpc.Status` with `google.rpc.Code.FAILED_PRECONDITION` if
     * the setting is flagged as read only.
     * Returns a `google.rpc.Status` with `google.rpc.Code.ABORTED` if the etag
     * supplied in the request does not match the persisted etag of the setting
     * value.
     *
     * On success, the response will contain only `name`, `local_value` and
     * `etag`.  The `metadata` and `effective_value` cannot be updated through
     * this API.
     *
     * Note: the supplied setting will perform a full overwrite of the
     * `local_value` field.
     *
     * Sample code:
     * ```
     * $resourceSettingsServiceClient = new ResourceSettingsServiceClient();
     * try {
     *     $setting = new Setting();
     *     $response = $resourceSettingsServiceClient->updateSetting($setting);
     * } finally {
     *     $resourceSettingsServiceClient->close();
     * }
     * ```
     *
     * @param Setting $setting      Required. The setting to update. See [Setting][google.cloud.resourcesettings.v1.Setting] for field requirements.
     * @param array   $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\ResourceSettings\V1\Setting
     *
     * @throws ApiException if the remote call fails
     */
    public function updateSetting($setting, array $optionalArgs = [])
    {
        $request = new UpdateSettingRequest();
        $requestParamHeaders = [];
        $request->setSetting($setting);
        $requestParamHeaders['setting.name'] = $setting->getName();
        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->startCall(
            'UpdateSetting',
            Setting::class,
            $optionalArgs,
            $request
        )->wait();
    }
}
