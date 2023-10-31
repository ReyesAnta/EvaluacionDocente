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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/networkconnectivity/v1/policy_based_routing.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\NetworkConnectivity\V1\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\LongRunning\OperationsClient;
use Google\ApiCore\OperationResponse;
use Google\ApiCore\PathTemplate;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\NetworkConnectivity\V1\CreatePolicyBasedRouteRequest;
use Google\Cloud\NetworkConnectivity\V1\DeletePolicyBasedRouteRequest;
use Google\Cloud\NetworkConnectivity\V1\GetPolicyBasedRouteRequest;
use Google\Cloud\NetworkConnectivity\V1\ListPolicyBasedRoutesRequest;
use Google\Cloud\NetworkConnectivity\V1\ListPolicyBasedRoutesResponse;
use Google\Cloud\NetworkConnectivity\V1\PolicyBasedRoute;
use Google\LongRunning\Operation;

/**
 * Service Description: Policy-Based Routing allows GCP customers to specify flexibile routing
 * policies for Layer 4 traffic traversing through the connected service.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $policyBasedRoutingServiceClient = new PolicyBasedRoutingServiceClient();
 * try {
 *     $formattedParent = $policyBasedRoutingServiceClient->locationName('[PROJECT]', '[LOCATION]');
 *     $policyBasedRouteId = 'policy_based_route_id';
 *     $policyBasedRoute = new PolicyBasedRoute();
 *     $operationResponse = $policyBasedRoutingServiceClient->createPolicyBasedRoute($formattedParent, $policyBasedRouteId, $policyBasedRoute);
 *     $operationResponse->pollUntilComplete();
 *     if ($operationResponse->operationSucceeded()) {
 *         $result = $operationResponse->getResult();
 *         // doSomethingWith($result)
 *     } else {
 *         $error = $operationResponse->getError();
 *         // handleError($error)
 *     }
 *     // Alternatively:
 *     // start the operation, keep the operation name, and resume later
 *     $operationResponse = $policyBasedRoutingServiceClient->createPolicyBasedRoute($formattedParent, $policyBasedRouteId, $policyBasedRoute);
 *     $operationName = $operationResponse->getName();
 *     // ... do other work
 *     $newOperationResponse = $policyBasedRoutingServiceClient->resumeOperation($operationName, 'createPolicyBasedRoute');
 *     while (!$newOperationResponse->isDone()) {
 *         // ... do other work
 *         $newOperationResponse->reload();
 *     }
 *     if ($newOperationResponse->operationSucceeded()) {
 *         $result = $newOperationResponse->getResult();
 *         // doSomethingWith($result)
 *     } else {
 *         $error = $newOperationResponse->getError();
 *         // handleError($error)
 *     }
 * } finally {
 *     $policyBasedRoutingServiceClient->close();
 * }
 * ```
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * This service has a new (beta) implementation. See {@see
 * \Google\Cloud\NetworkConnectivity\V1\Client\PolicyBasedRoutingServiceClient} to
 * use the new surface.
 */
class PolicyBasedRoutingServiceGapicClient
{
    use GapicClientTrait;

    /** The name of the service. */
    const SERVICE_NAME = 'google.cloud.networkconnectivity.v1.PolicyBasedRoutingService';

    /** The default address of the service. */
    const SERVICE_ADDRESS = 'networkconnectivity.googleapis.com';

    /** The default port of the service. */
    const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
    ];

    private static $locationNameTemplate;

    private static $networkNameTemplate;

    private static $policyBasedRouteNameTemplate;

    private static $pathTemplateMap;

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' =>
                self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' =>
                __DIR__ .
                '/../resources/policy_based_routing_service_client_config.json',
            'descriptorsConfigPath' =>
                __DIR__ .
                '/../resources/policy_based_routing_service_descriptor_config.php',
            'gcpApiConfigPath' =>
                __DIR__ .
                '/../resources/policy_based_routing_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' =>
                        __DIR__ .
                        '/../resources/policy_based_routing_service_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getLocationNameTemplate()
    {
        if (self::$locationNameTemplate == null) {
            self::$locationNameTemplate = new PathTemplate(
                'projects/{project}/locations/{location}'
            );
        }

        return self::$locationNameTemplate;
    }

    private static function getNetworkNameTemplate()
    {
        if (self::$networkNameTemplate == null) {
            self::$networkNameTemplate = new PathTemplate(
                'projects/{project}/global/networks/{resource_id}'
            );
        }

        return self::$networkNameTemplate;
    }

    private static function getPolicyBasedRouteNameTemplate()
    {
        if (self::$policyBasedRouteNameTemplate == null) {
            self::$policyBasedRouteNameTemplate = new PathTemplate(
                'projects/{project}/locations/global/PolicyBasedRoutes/{policy_based_route}'
            );
        }

        return self::$policyBasedRouteNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (self::$pathTemplateMap == null) {
            self::$pathTemplateMap = [
                'location' => self::getLocationNameTemplate(),
                'network' => self::getNetworkNameTemplate(),
                'policyBasedRoute' => self::getPolicyBasedRouteNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent a location
     * resource.
     *
     * @param string $project
     * @param string $location
     *
     * @return string The formatted location resource.
     */
    public static function locationName($project, $location)
    {
        return self::getLocationNameTemplate()->render([
            'project' => $project,
            'location' => $location,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a network
     * resource.
     *
     * @param string $project
     * @param string $resourceId
     *
     * @return string The formatted network resource.
     */
    public static function networkName($project, $resourceId)
    {
        return self::getNetworkNameTemplate()->render([
            'project' => $project,
            'resource_id' => $resourceId,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * policy_based_route resource.
     *
     * @param string $project
     * @param string $policyBasedRoute
     *
     * @return string The formatted policy_based_route resource.
     */
    public static function policyBasedRouteName($project, $policyBasedRoute)
    {
        return self::getPolicyBasedRouteNameTemplate()->render([
            'project' => $project,
            'policy_based_route' => $policyBasedRoute,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - location: projects/{project}/locations/{location}
     * - network: projects/{project}/global/networks/{resource_id}
     * - policyBasedRoute: projects/{project}/locations/global/PolicyBasedRoutes/{policy_based_route}
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
     * Return an OperationsClient object with the same endpoint as $this.
     *
     * @return OperationsClient
     */
    public function getOperationsClient()
    {
        return $this->operationsClient;
    }

    /**
     * Resume an existing long running operation that was previously started by a long
     * running API method. If $methodName is not provided, or does not match a long
     * running API method, then the operation can still be resumed, but the
     * OperationResponse object will not deserialize the final response.
     *
     * @param string $operationName The name of the long running operation
     * @param string $methodName    The name of the method used to start the operation
     *
     * @return OperationResponse
     */
    public function resumeOperation($operationName, $methodName = null)
    {
        $options = isset($this->descriptors[$methodName]['longRunning'])
            ? $this->descriptors[$methodName]['longRunning']
            : [];
        $operation = new OperationResponse(
            $operationName,
            $this->getOperationsClient(),
            $options
        );
        $operation->reload();
        return $operation;
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'networkconnectivity.googleapis.com:443'.
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
        $this->operationsClient = $this->createOperationsClient($clientOptions);
    }

    /**
     * Creates a new PolicyBasedRoute in a given project and location.
     *
     * Sample code:
     * ```
     * $policyBasedRoutingServiceClient = new PolicyBasedRoutingServiceClient();
     * try {
     *     $formattedParent = $policyBasedRoutingServiceClient->locationName('[PROJECT]', '[LOCATION]');
     *     $policyBasedRouteId = 'policy_based_route_id';
     *     $policyBasedRoute = new PolicyBasedRoute();
     *     $operationResponse = $policyBasedRoutingServiceClient->createPolicyBasedRoute($formattedParent, $policyBasedRouteId, $policyBasedRoute);
     *     $operationResponse->pollUntilComplete();
     *     if ($operationResponse->operationSucceeded()) {
     *         $result = $operationResponse->getResult();
     *         // doSomethingWith($result)
     *     } else {
     *         $error = $operationResponse->getError();
     *         // handleError($error)
     *     }
     *     // Alternatively:
     *     // start the operation, keep the operation name, and resume later
     *     $operationResponse = $policyBasedRoutingServiceClient->createPolicyBasedRoute($formattedParent, $policyBasedRouteId, $policyBasedRoute);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $policyBasedRoutingServiceClient->resumeOperation($operationName, 'createPolicyBasedRoute');
     *     while (!$newOperationResponse->isDone()) {
     *         // ... do other work
     *         $newOperationResponse->reload();
     *     }
     *     if ($newOperationResponse->operationSucceeded()) {
     *         $result = $newOperationResponse->getResult();
     *         // doSomethingWith($result)
     *     } else {
     *         $error = $newOperationResponse->getError();
     *         // handleError($error)
     *     }
     * } finally {
     *     $policyBasedRoutingServiceClient->close();
     * }
     * ```
     *
     * @param string           $parent             Required. The parent resource's name of the PolicyBasedRoute.
     * @param string           $policyBasedRouteId Required. Unique id for the Policy Based Route to create.
     * @param PolicyBasedRoute $policyBasedRoute   Required. Initial values for a new Policy Based Route.
     * @param array            $optionalArgs       {
     *     Optional.
     *
     *     @type string $requestId
     *           Optional. An optional request ID to identify requests. Specify a unique
     *           request ID so that if you must retry your request, the server will know to
     *           ignore the request if it has already been completed. The server will
     *           guarantee that for at least 60 minutes since the first request.
     *
     *           For example, consider a situation where you make an initial request and
     *           the request times out. If you make the request again with the same request
     *           ID, the server can check if original operation with the same request ID
     *           was received, and if so, will ignore the second request. This prevents
     *           clients from accidentally creating duplicate commitments.
     *
     *           The request ID must be a valid UUID with the exception that zero UUID is
     *           not supported (00000000-0000-0000-0000-000000000000).
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\OperationResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function createPolicyBasedRoute(
        $parent,
        $policyBasedRouteId,
        $policyBasedRoute,
        array $optionalArgs = []
    ) {
        $request = new CreatePolicyBasedRouteRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $request->setPolicyBasedRouteId($policyBasedRouteId);
        $request->setPolicyBasedRoute($policyBasedRoute);
        $requestParamHeaders['parent'] = $parent;
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }

        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->startOperationsCall(
            'CreatePolicyBasedRoute',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Deletes a single PolicyBasedRoute.
     *
     * Sample code:
     * ```
     * $policyBasedRoutingServiceClient = new PolicyBasedRoutingServiceClient();
     * try {
     *     $formattedName = $policyBasedRoutingServiceClient->policyBasedRouteName('[PROJECT]', '[POLICY_BASED_ROUTE]');
     *     $operationResponse = $policyBasedRoutingServiceClient->deletePolicyBasedRoute($formattedName);
     *     $operationResponse->pollUntilComplete();
     *     if ($operationResponse->operationSucceeded()) {
     *         // operation succeeded and returns no value
     *     } else {
     *         $error = $operationResponse->getError();
     *         // handleError($error)
     *     }
     *     // Alternatively:
     *     // start the operation, keep the operation name, and resume later
     *     $operationResponse = $policyBasedRoutingServiceClient->deletePolicyBasedRoute($formattedName);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $policyBasedRoutingServiceClient->resumeOperation($operationName, 'deletePolicyBasedRoute');
     *     while (!$newOperationResponse->isDone()) {
     *         // ... do other work
     *         $newOperationResponse->reload();
     *     }
     *     if ($newOperationResponse->operationSucceeded()) {
     *         // operation succeeded and returns no value
     *     } else {
     *         $error = $newOperationResponse->getError();
     *         // handleError($error)
     *     }
     * } finally {
     *     $policyBasedRoutingServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Name of the PolicyBasedRoute resource to delete.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type string $requestId
     *           Optional. An optional request ID to identify requests. Specify a unique
     *           request ID so that if you must retry your request, the server will know to
     *           ignore the request if it has already been completed. The server will
     *           guarantee that for at least 60 minutes after the first request.
     *
     *           For example, consider a situation where you make an initial request and
     *           the request times out. If you make the request again with the same request
     *           ID, the server can check if original operation with the same request ID
     *           was received, and if so, will ignore the second request. This prevents
     *           clients from accidentally creating duplicate commitments.
     *
     *           The request ID must be a valid UUID with the exception that zero UUID is
     *           not supported (00000000-0000-0000-0000-000000000000).
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\OperationResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function deletePolicyBasedRoute($name, array $optionalArgs = [])
    {
        $request = new DeletePolicyBasedRouteRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }

        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->startOperationsCall(
            'DeletePolicyBasedRoute',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Gets details of a single PolicyBasedRoute.
     *
     * Sample code:
     * ```
     * $policyBasedRoutingServiceClient = new PolicyBasedRoutingServiceClient();
     * try {
     *     $formattedName = $policyBasedRoutingServiceClient->policyBasedRouteName('[PROJECT]', '[POLICY_BASED_ROUTE]');
     *     $response = $policyBasedRoutingServiceClient->getPolicyBasedRoute($formattedName);
     * } finally {
     *     $policyBasedRoutingServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Name of the PolicyBasedRoute resource to get.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\NetworkConnectivity\V1\PolicyBasedRoute
     *
     * @throws ApiException if the remote call fails
     */
    public function getPolicyBasedRoute($name, array $optionalArgs = [])
    {
        $request = new GetPolicyBasedRouteRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->startCall(
            'GetPolicyBasedRoute',
            PolicyBasedRoute::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Lists PolicyBasedRoutes in a given project and location.
     *
     * Sample code:
     * ```
     * $policyBasedRoutingServiceClient = new PolicyBasedRoutingServiceClient();
     * try {
     *     $formattedParent = $policyBasedRoutingServiceClient->locationName('[PROJECT]', '[LOCATION]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $policyBasedRoutingServiceClient->listPolicyBasedRoutes($formattedParent);
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *     // Alternatively:
     *     // Iterate through all elements
     *     $pagedResponse = $policyBasedRoutingServiceClient->listPolicyBasedRoutes($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $policyBasedRoutingServiceClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The parent resource's name.
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
     *           A filter expression that filters the results listed in the response.
     *     @type string $orderBy
     *           Sort the results by a certain order.
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
    public function listPolicyBasedRoutes($parent, array $optionalArgs = [])
    {
        $request = new ListPolicyBasedRoutesRequest();
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

        if (isset($optionalArgs['orderBy'])) {
            $request->setOrderBy($optionalArgs['orderBy']);
        }

        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->getPagedListResponse(
            'ListPolicyBasedRoutes',
            $optionalArgs,
            ListPolicyBasedRoutesResponse::class,
            $request
        );
    }
}
