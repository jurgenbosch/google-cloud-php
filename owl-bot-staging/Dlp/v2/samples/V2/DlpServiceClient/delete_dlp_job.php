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

// [START dlp_v2_generated_DlpService_DeleteDlpJob_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\Dlp\V2\DlpServiceClient;

/**
 * Deletes a long-running DlpJob. This method indicates that the client is
 * no longer interested in the DlpJob result. The job will be canceled if
 * possible.
 * See https://cloud.google.com/dlp/docs/inspecting-storage and
 * https://cloud.google.com/dlp/docs/compute-risk-analysis to learn more.
 *
 * @param string $formattedName The name of the DlpJob resource to be deleted. Please see
 *                              {@see DlpServiceClient::dlpJobName()} for help formatting this field.
 */
function delete_dlp_job_sample(string $formattedName): void
{
    // Create a client.
    $dlpServiceClient = new DlpServiceClient();

    // Call the API and handle any network failures.
    try {
        $dlpServiceClient->deleteDlpJob($formattedName);
        printf('Call completed successfully.' . PHP_EOL);
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
    $formattedName = DlpServiceClient::dlpJobName('[PROJECT]', '[DLP_JOB]');

    delete_dlp_job_sample($formattedName);
}
// [END dlp_v2_generated_DlpService_DeleteDlpJob_sync]
