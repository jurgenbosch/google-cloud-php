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

// [START beyondcorp_v1_generated_ClientConnectorServicesService_CreateClientConnectorService_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\OperationResponse;
use Google\Cloud\BeyondCorp\ClientConnectorServices\V1\ClientConnectorService;
use Google\Cloud\BeyondCorp\ClientConnectorServices\V1\ClientConnectorService\Egress;
use Google\Cloud\BeyondCorp\ClientConnectorServices\V1\ClientConnectorService\Ingress;
use Google\Cloud\BeyondCorp\ClientConnectorServices\V1\ClientConnectorServicesServiceClient;
use Google\Rpc\Status;

/**
 * Creates a new ClientConnectorService in a given project and location.
 *
 * @param string $formattedParent            Value for parent. Please see
 *                                           {@see ClientConnectorServicesServiceClient::locationName()} for help formatting this field.
 * @param string $clientConnectorServiceName Name of resource. The name is ignored during creation.
 */
function create_client_connector_service_sample(
    string $formattedParent,
    string $clientConnectorServiceName
): void {
    // Create a client.
    $clientConnectorServicesServiceClient = new ClientConnectorServicesServiceClient();

    // Prepare any non-scalar elements to be passed along with the request.
    $clientConnectorServiceIngress = new Ingress();
    $clientConnectorServiceEgress = new Egress();
    $clientConnectorService = (new ClientConnectorService())
        ->setName($clientConnectorServiceName)
        ->setIngress($clientConnectorServiceIngress)
        ->setEgress($clientConnectorServiceEgress);

    // Call the API and handle any network failures.
    try {
        /** @var OperationResponse $response */
        $response = $clientConnectorServicesServiceClient->createClientConnectorService(
            $formattedParent,
            $clientConnectorService
        );
        $response->pollUntilComplete();

        if ($response->operationSucceeded()) {
            /** @var ClientConnectorService $result */
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
    $formattedParent = ClientConnectorServicesServiceClient::locationName('[PROJECT]', '[LOCATION]');
    $clientConnectorServiceName = '[NAME]';

    create_client_connector_service_sample($formattedParent, $clientConnectorServiceName);
}
// [END beyondcorp_v1_generated_ClientConnectorServicesService_CreateClientConnectorService_sync]
