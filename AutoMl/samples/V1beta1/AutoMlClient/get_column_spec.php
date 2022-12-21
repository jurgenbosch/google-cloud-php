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

// [START automl_v1beta1_generated_AutoMl_GetColumnSpec_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\AutoMl\V1beta1\AutoMlClient;
use Google\Cloud\AutoMl\V1beta1\ColumnSpec;

/**
 * Gets a column spec.
 *
 * @param string $formattedName The resource name of the column spec to retrieve. Please see
 *                              {@see AutoMlClient::columnSpecName()} for help formatting this field.
 */
function get_column_spec_sample(string $formattedName): void
{
    // Create a client.
    $autoMlClient = new AutoMlClient();

    // Call the API and handle any network failures.
    try {
        /** @var ColumnSpec $response */
        $response = $autoMlClient->getColumnSpec($formattedName);
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
    $formattedName = AutoMlClient::columnSpecName(
        '[PROJECT]',
        '[LOCATION]',
        '[DATASET]',
        '[TABLE_SPEC]',
        '[COLUMN_SPEC]'
    );

    get_column_spec_sample($formattedName);
}
// [END automl_v1beta1_generated_AutoMl_GetColumnSpec_sync]
