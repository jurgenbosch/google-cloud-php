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
 * https://github.com/googleapis/googleapis/blob/master/google/devtools/build/v1/publish_build_event.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Build\V1\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\Call;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Build\V1\OrderedBuildEvent;
use Google\Cloud\Build\V1\PublishBuildToolEventStreamRequest;
use Google\Cloud\Build\V1\PublishBuildToolEventStreamResponse;
use Google\Cloud\Build\V1\PublishLifecycleEventRequest;
use Google\Protobuf\Duration;
use Google\Protobuf\GPBEmpty;

/**
 * Service Description: A service for publishing BuildEvents. BuildEvents are generated by Build
 * Systems to record actions taken during a Build. Events occur in streams,
 * are identified by a StreamId, and ordered by sequence number in a stream.
 *
 * A Build may contain several streams of BuildEvents, depending on the systems
 * that are involved in the Build. Some BuildEvents are used to declare the
 * beginning and end of major portions of a Build; these are called
 * LifecycleEvents, and are used (for example) to indicate the beginning or end
 * of a Build, and the beginning or end of an Invocation attempt (there can be
 * more than 1 Invocation in a Build if, for example, a failure occurs somewhere
 * and it needs to be retried).
 *
 * Other, build-tool events represent actions taken by the Build tool, such as
 * target objects produced via compilation, tests run, et cetera. There could be
 * more than one build tool stream for an invocation attempt of a build.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $publishBuildEventClient = new PublishBuildEventClient();
 * try {
 *     $orderedBuildEvent = new OrderedBuildEvent();
 *     $projectId = 'project_id';
 *     $request = new PublishBuildToolEventStreamRequest();
 *     $request->setOrderedBuildEvent($orderedBuildEvent);
 *     $request->setProjectId($projectId);
 *     // Write all requests to the server, then read all responses until the
 *     // stream is complete
 *     $requests = [
 *         $request,
 *     ];
 *     $stream = $publishBuildEventClient->publishBuildToolEventStream();
 *     $stream->writeAll($requests);
 *     foreach ($stream->closeWriteAndReadAll() as $element) {
 *         // doSomethingWith($element);
 *     }
 *     // Alternatively:
 *     // Write requests individually, making read() calls if
 *     // required. Call closeWrite() once writes are complete, and read the
 *     // remaining responses from the server.
 *     $requests = [
 *         $request,
 *     ];
 *     $stream = $publishBuildEventClient->publishBuildToolEventStream();
 *     foreach ($requests as $request) {
 *         $stream->write($request);
 *         // if required, read a single response from the stream
 *         $element = $stream->read();
 *         // doSomethingWith($element)
 *     }
 *     $stream->closeWrite();
 *     $element = $stream->read();
 *     while (!is_null($element)) {
 *         // doSomethingWith($element)
 *         $element = $stream->read();
 *     }
 * } finally {
 *     $publishBuildEventClient->close();
 * }
 * ```
 */
class PublishBuildEventGapicClient
{
    use GapicClientTrait;

    /** The name of the service. */
    const SERVICE_NAME = 'google.devtools.build.v1.PublishBuildEvent';

    /** The default address of the service. */
    const SERVICE_ADDRESS = 'buildeventservice.googleapis.com';

    /** The default port of the service. */
    const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
    ];

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/publish_build_event_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/publish_build_event_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/publish_build_event_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/publish_build_event_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'buildeventservice.googleapis.com:443'.
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
     *           $apiEndpoint setting, will be ignored.
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
     * Publish build tool events belonging to the same stream to a backend job
     * using bidirectional streaming.
     *
     * Sample code:
     * ```
     * $publishBuildEventClient = new PublishBuildEventClient();
     * try {
     *     $orderedBuildEvent = new OrderedBuildEvent();
     *     $projectId = 'project_id';
     *     $request = new PublishBuildToolEventStreamRequest();
     *     $request->setOrderedBuildEvent($orderedBuildEvent);
     *     $request->setProjectId($projectId);
     *     // Write all requests to the server, then read all responses until the
     *     // stream is complete
     *     $requests = [
     *         $request,
     *     ];
     *     $stream = $publishBuildEventClient->publishBuildToolEventStream();
     *     $stream->writeAll($requests);
     *     foreach ($stream->closeWriteAndReadAll() as $element) {
     *         // doSomethingWith($element);
     *     }
     *     // Alternatively:
     *     // Write requests individually, making read() calls if
     *     // required. Call closeWrite() once writes are complete, and read the
     *     // remaining responses from the server.
     *     $requests = [
     *         $request,
     *     ];
     *     $stream = $publishBuildEventClient->publishBuildToolEventStream();
     *     foreach ($requests as $request) {
     *         $stream->write($request);
     *         // if required, read a single response from the stream
     *         $element = $stream->read();
     *         // doSomethingWith($element)
     *     }
     *     $stream->closeWrite();
     *     $element = $stream->read();
     *     while (!is_null($element)) {
     *         // doSomethingWith($element)
     *         $element = $stream->read();
     *     }
     * } finally {
     *     $publishBuildEventClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *     Optional.
     *
     *     @type int $timeoutMillis
     *           Timeout to use for this call.
     * }
     *
     * @return \Google\ApiCore\BidiStream
     *
     * @throws ApiException if the remote call fails
     */
    public function publishBuildToolEventStream(array $optionalArgs = [])
    {
        return $this->startCall('PublishBuildToolEventStream', PublishBuildToolEventStreamResponse::class, $optionalArgs, null, Call::BIDI_STREAMING_CALL);
    }

    /**
     * Publish a build event stating the new state of a build (typically from the
     * build queue). The BuildEnqueued event must be published before all other
     * events for the same build ID.
     *
     * The backend will persist the event and deliver it to registered frontend
     * jobs immediately without batching.
     *
     * The commit status of the request is reported by the RPC's util_status()
     * function. The error code is the canoncial error code defined in
     * //util/task/codes.proto.
     *
     * Sample code:
     * ```
     * $publishBuildEventClient = new PublishBuildEventClient();
     * try {
     *     $buildEvent = new OrderedBuildEvent();
     *     $projectId = 'project_id';
     *     $publishBuildEventClient->publishLifecycleEvent($buildEvent, $projectId);
     * } finally {
     *     $publishBuildEventClient->close();
     * }
     * ```
     *
     * @param OrderedBuildEvent $buildEvent   Required. The lifecycle build event. If this is a build tool event, the RPC
     *                                        will fail with INVALID_REQUEST.
     * @param string            $projectId    Required. The project this build is associated with.
     *                                        This should match the project used for the initial call to
     *                                        PublishLifecycleEvent (containing a BuildEnqueued message).
     * @param array             $optionalArgs {
     *     Optional.
     *
     *     @type int $serviceLevel
     *           The interactivity of this build.
     *           For allowed values, use constants defined on {@see \Google\Cloud\Build\V1\PublishLifecycleEventRequest\ServiceLevel}
     *     @type Duration $streamTimeout
     *           If the next event for this build or invocation (depending on the event
     *           type) hasn't been published after this duration from when {build_event}
     *           is written to BES, consider this stream expired. If this field is not set,
     *           BES backend will use its own default value.
     *     @type string[] $notificationKeywords
     *           Additional information about a build request. These are define by the event
     *           publishers, and the Build Event Service does not validate or interpret
     *           them. They are used while notifying internal systems of new builds and
     *           invocations if the OrderedBuildEvent.event type is
     *           BuildEnqueued/InvocationAttemptStarted.
     *     @type bool $checkPrecedingLifecycleEventsPresent
     *           Whether to require a previously received matching parent lifecycle event
     *           for the current request's event before continuing processing.
     *           - InvocationAttemptStarted and BuildFinished events require a BuildEnqueued
     *           parent event.
     *           - InvocationAttemptFinished events require an InvocationAttemptStarted
     *           parent event.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @throws ApiException if the remote call fails
     */
    public function publishLifecycleEvent($buildEvent, $projectId, array $optionalArgs = [])
    {
        $request = new PublishLifecycleEventRequest();
        $requestParamHeaders = [];
        $request->setBuildEvent($buildEvent);
        $request->setProjectId($projectId);
        $requestParamHeaders['project_id'] = $projectId;
        if (isset($optionalArgs['serviceLevel'])) {
            $request->setServiceLevel($optionalArgs['serviceLevel']);
        }

        if (isset($optionalArgs['streamTimeout'])) {
            $request->setStreamTimeout($optionalArgs['streamTimeout']);
        }

        if (isset($optionalArgs['notificationKeywords'])) {
            $request->setNotificationKeywords($optionalArgs['notificationKeywords']);
        }

        if (isset($optionalArgs['checkPrecedingLifecycleEventsPresent'])) {
            $request->setCheckPrecedingLifecycleEventsPresent($optionalArgs['checkPrecedingLifecycleEventsPresent']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('PublishLifecycleEvent', GPBEmpty::class, $optionalArgs, $request)->wait();
    }
}
