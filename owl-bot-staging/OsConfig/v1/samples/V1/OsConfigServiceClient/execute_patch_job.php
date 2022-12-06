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

// [START osconfig_v1_generated_OsConfigService_ExecutePatchJob_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\OsConfig\V1\OsConfigServiceClient;
use Google\Cloud\OsConfig\V1\PatchInstanceFilter;
use Google\Cloud\OsConfig\V1\PatchJob;

/**
 * Patch VM instances by creating and running a patch job.
 *
 * @param string $formattedParent The project in which to run this patch in the form `projects/*`
 *                                Please see {@see OsConfigServiceClient::projectName()} for help formatting this field.
 */
function execute_patch_job_sample(string $formattedParent): void
{
    // Create a client.
    $osConfigServiceClient = new OsConfigServiceClient();

    // Prepare any non-scalar elements to be passed along with the request.
    $instanceFilter = new PatchInstanceFilter();

    // Call the API and handle any network failures.
    try {
        /** @var PatchJob $response */
        $response = $osConfigServiceClient->executePatchJob($formattedParent, $instanceFilter);
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
    $formattedParent = OsConfigServiceClient::projectName('[PROJECT]');

    execute_patch_job_sample($formattedParent);
}
// [END osconfig_v1_generated_OsConfigService_ExecutePatchJob_sync]
