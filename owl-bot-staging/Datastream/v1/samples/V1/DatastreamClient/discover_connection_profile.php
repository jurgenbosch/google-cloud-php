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
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START datastream_v1_generated_Datastream_DiscoverConnectionProfile_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\Datastream\V1\DatastreamClient;
use Google\Cloud\Datastream\V1\DiscoverConnectionProfileResponse;

/**
 * Use this method to discover a connection profile.
 * The discover API call exposes the data objects and metadata belonging to
 * the profile. Typically, a request returns children data objects of a
 * parent data object that's optionally supplied in the request.
 *
 * @param string $formattedParent The parent resource of the connection profile type. Must be in the
 *                                format `projects/&#42;/locations/*`. Please see
 *                                {@see DatastreamClient::locationName()} for help formatting this field.
 */
function discover_connection_profile_sample(string $formattedParent): void
{
    // Create a client.
    $datastreamClient = new DatastreamClient();

    // Call the API and handle any network failures.
    try {
        /** @var DiscoverConnectionProfileResponse $response */
        $response = $datastreamClient->discoverConnectionProfile($formattedParent);
        printf('Response data: %s' . PHP_EOL, $response->serializeToJsonString());
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $formattedParent = DatastreamClient::locationName('[PROJECT]', '[LOCATION]');

    discover_connection_profile_sample($formattedParent);
}
// [END datastream_v1_generated_Datastream_DiscoverConnectionProfile_sync]
