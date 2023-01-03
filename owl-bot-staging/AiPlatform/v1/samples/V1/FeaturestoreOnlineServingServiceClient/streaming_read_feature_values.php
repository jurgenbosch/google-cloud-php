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

// [START aiplatform_v1_generated_FeaturestoreOnlineServingService_StreamingReadFeatureValues_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\ServerStream;
use Google\Cloud\AIPlatform\V1\FeatureSelector;
use Google\Cloud\AIPlatform\V1\FeaturestoreOnlineServingServiceClient;
use Google\Cloud\AIPlatform\V1\IdMatcher;
use Google\Cloud\AIPlatform\V1\ReadFeatureValuesResponse;

/**
 * Reads Feature values for multiple entities. Depending on their size, data
 * for different entities may be broken
 * up across multiple responses.
 *
 * @param string $formattedEntityType                The resource name of the entities' type.
 *                                                   Value format:
 *                                                   `projects/{project}/locations/{location}/featurestores/{featurestore}/entityTypes/{entityType}`.
 *                                                   For example,
 *                                                   for a machine learning model predicting user clicks on a website, an
 *                                                   EntityType ID could be `user`. Please see
 *                                                   {@see FeaturestoreOnlineServingServiceClient::entityTypeName()} for help formatting this field.
 * @param string $entityIdsElement                   IDs of entities to read Feature values of. The maximum number of IDs is
 *                                                   100. For example, for a machine learning model predicting user clicks on a
 *                                                   website, an entity ID could be `user_123`.
 * @param string $featureSelectorIdMatcherIdsElement The following are accepted as `ids`:
 *
 *                                                   * A single-element list containing only `*`, which selects all Features
 *                                                   in the target EntityType, or
 *                                                   * A list containing only Feature IDs, which selects only Features with
 *                                                   those IDs in the target EntityType.
 */
function streaming_read_feature_values_sample(
    string $formattedEntityType,
    string $entityIdsElement,
    string $featureSelectorIdMatcherIdsElement
): void {
    // Create a client.
    $featurestoreOnlineServingServiceClient = new FeaturestoreOnlineServingServiceClient();

    // Prepare any non-scalar elements to be passed along with the request.
    $entityIds = [$entityIdsElement,];
    $featureSelectorIdMatcherIds = [$featureSelectorIdMatcherIdsElement,];
    $featureSelectorIdMatcher = (new IdMatcher())
        ->setIds($featureSelectorIdMatcherIds);
    $featureSelector = (new FeatureSelector())
        ->setIdMatcher($featureSelectorIdMatcher);

    // Call the API and handle any network failures.
    try {
        /** @var ServerStream $stream */
        $stream = $featurestoreOnlineServingServiceClient->streamingReadFeatureValues(
            $formattedEntityType,
            $entityIds,
            $featureSelector
        );

        /** @var ReadFeatureValuesResponse $element */
        foreach ($stream->readAll() as $element) {
            printf('Element data: %s' . PHP_EOL, $element->serializeToJsonString());
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
    $formattedEntityType = FeaturestoreOnlineServingServiceClient::entityTypeName(
        '[PROJECT]',
        '[LOCATION]',
        '[FEATURESTORE]',
        '[ENTITY_TYPE]'
    );
    $entityIdsElement = '[ENTITY_IDS]';
    $featureSelectorIdMatcherIdsElement = '[IDS]';

    streaming_read_feature_values_sample(
        $formattedEntityType,
        $entityIdsElement,
        $featureSelectorIdMatcherIdsElement
    );
}
// [END aiplatform_v1_generated_FeaturestoreOnlineServingService_StreamingReadFeatureValues_sync]
