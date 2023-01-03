<?php
/*
 * Copyright 2023 Google LLC
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

// [START aiplatform_v1_generated_FeaturestoreService_CreateFeaturestore_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\OperationResponse;
use Google\Cloud\AIPlatform\V1\Featurestore;
use Google\Cloud\AIPlatform\V1\FeaturestoreServiceClient;
use Google\Rpc\Status;

/**
 * Creates a new Featurestore in a given project and location.
 *
 * @param string $formattedParent The resource name of the Location to create Featurestores.
 *                                Format:
 *                                `projects/{project}/locations/{location}'`
 *                                Please see {@see FeaturestoreServiceClient::locationName()} for help formatting this field.
 * @param string $featurestoreId  The ID to use for this Featurestore, which will become the final component
 *                                of the Featurestore's resource name.
 *
 *                                This value may be up to 60 characters, and valid characters are
 *                                `[a-z0-9_]`. The first character cannot be a number.
 *
 *                                The value must be unique within the project and location.
 */
function create_featurestore_sample(string $formattedParent, string $featurestoreId): void
{
    // Create a client.
    $featurestoreServiceClient = new FeaturestoreServiceClient();

    // Prepare any non-scalar elements to be passed along with the request.
    $featurestore = new Featurestore();

    // Call the API and handle any network failures.
    try {
        /** @var OperationResponse $response */
        $response = $featurestoreServiceClient->createFeaturestore(
            $formattedParent,
            $featurestore,
            $featurestoreId
        );
        $response->pollUntilComplete();

        if ($response->operationSucceeded()) {
            /** @var Featurestore $result */
            $result = $response->getResult();
            printf('Operation successful with response data: %s' . PHP_EOL, $result->serializeToJsonString());
        } else {
            /** @var Status $error */
            $error = $response->getError();
            printf('Operation failed with error data: %s' . PHP_EOL, $error->serializeToJsonString());
        }
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
    $formattedParent = FeaturestoreServiceClient::locationName('[PROJECT]', '[LOCATION]');
    $featurestoreId = '[FEATURESTORE_ID]';

    create_featurestore_sample($formattedParent, $featurestoreId);
}
// [END aiplatform_v1_generated_FeaturestoreService_CreateFeaturestore_sync]
