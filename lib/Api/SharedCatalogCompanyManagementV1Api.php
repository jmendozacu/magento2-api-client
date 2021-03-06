<?php
/**
 * SharedCatalogCompanyManagementV1Api
 * PHP version 5
 *
 * @category Class
 * @package  Krak\MagentoApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Magento Commerce for B2B
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Krak\MagentoApiClient\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Krak\MagentoApiClient\ApiException;
use Krak\MagentoApiClient\Configuration;
use Krak\MagentoApiClient\HeaderSelector;
use Krak\MagentoApiClient\ObjectSerializer;

/**
 * SharedCatalogCompanyManagementV1Api Class Doc Comment
 *
 * @category Class
 * @package  Krak\MagentoApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SharedCatalogCompanyManagementV1Api
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation sharedCatalogCompanyManagementV1AssignCompaniesPost
     *
     * @param  int $sharedCatalogId sharedCatalogId (required)
     * @param  \Krak\MagentoApiClient\Model\SharedCatalogCompanyManagementV1AssignCompaniesPostBody $sharedCatalogCompanyManagementV1AssignCompaniesPostBody sharedCatalogCompanyManagementV1AssignCompaniesPostBody (optional)
     *
     * @throws \Krak\MagentoApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return bool
     */
    public function sharedCatalogCompanyManagementV1AssignCompaniesPost($sharedCatalogId, $sharedCatalogCompanyManagementV1AssignCompaniesPostBody = null)
    {
        list($response) = $this->sharedCatalogCompanyManagementV1AssignCompaniesPostWithHttpInfo($sharedCatalogId, $sharedCatalogCompanyManagementV1AssignCompaniesPostBody);
        return $response;
    }

    /**
     * Operation sharedCatalogCompanyManagementV1AssignCompaniesPostWithHttpInfo
     *
     * @param  int $sharedCatalogId (required)
     * @param  \Krak\MagentoApiClient\Model\SharedCatalogCompanyManagementV1AssignCompaniesPostBody $sharedCatalogCompanyManagementV1AssignCompaniesPostBody (optional)
     *
     * @throws \Krak\MagentoApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of bool, HTTP status code, HTTP response headers (array of strings)
     */
    public function sharedCatalogCompanyManagementV1AssignCompaniesPostWithHttpInfo($sharedCatalogId, $sharedCatalogCompanyManagementV1AssignCompaniesPostBody = null)
    {
        $returnType = 'bool';
        $request = $this->sharedCatalogCompanyManagementV1AssignCompaniesPostRequest($sharedCatalogId, $sharedCatalogCompanyManagementV1AssignCompaniesPostBody);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'bool',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Krak\MagentoApiClient\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Krak\MagentoApiClient\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Krak\MagentoApiClient\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation sharedCatalogCompanyManagementV1AssignCompaniesPostAsync
     *
     * 
     *
     * @param  int $sharedCatalogId (required)
     * @param  \Krak\MagentoApiClient\Model\SharedCatalogCompanyManagementV1AssignCompaniesPostBody $sharedCatalogCompanyManagementV1AssignCompaniesPostBody (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sharedCatalogCompanyManagementV1AssignCompaniesPostAsync($sharedCatalogId, $sharedCatalogCompanyManagementV1AssignCompaniesPostBody = null)
    {
        return $this->sharedCatalogCompanyManagementV1AssignCompaniesPostAsyncWithHttpInfo($sharedCatalogId, $sharedCatalogCompanyManagementV1AssignCompaniesPostBody)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation sharedCatalogCompanyManagementV1AssignCompaniesPostAsyncWithHttpInfo
     *
     * 
     *
     * @param  int $sharedCatalogId (required)
     * @param  \Krak\MagentoApiClient\Model\SharedCatalogCompanyManagementV1AssignCompaniesPostBody $sharedCatalogCompanyManagementV1AssignCompaniesPostBody (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sharedCatalogCompanyManagementV1AssignCompaniesPostAsyncWithHttpInfo($sharedCatalogId, $sharedCatalogCompanyManagementV1AssignCompaniesPostBody = null)
    {
        $returnType = 'bool';
        $request = $this->sharedCatalogCompanyManagementV1AssignCompaniesPostRequest($sharedCatalogId, $sharedCatalogCompanyManagementV1AssignCompaniesPostBody);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'sharedCatalogCompanyManagementV1AssignCompaniesPost'
     *
     * @param  int $sharedCatalogId (required)
     * @param  \Krak\MagentoApiClient\Model\SharedCatalogCompanyManagementV1AssignCompaniesPostBody $sharedCatalogCompanyManagementV1AssignCompaniesPostBody (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function sharedCatalogCompanyManagementV1AssignCompaniesPostRequest($sharedCatalogId, $sharedCatalogCompanyManagementV1AssignCompaniesPostBody = null)
    {
        // verify the required parameter 'sharedCatalogId' is set
        if ($sharedCatalogId === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sharedCatalogId when calling sharedCatalogCompanyManagementV1AssignCompaniesPost'
            );
        }

        $resourcePath = '/V1/sharedCatalog/{sharedCatalogId}/assignCompanies';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($sharedCatalogId !== null) {
            $resourcePath = str_replace(
                '{' . 'sharedCatalogId' . '}',
                ObjectSerializer::toPathValue($sharedCatalogId),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($sharedCatalogCompanyManagementV1AssignCompaniesPostBody)) {
            $_tempBody = $sharedCatalogCompanyManagementV1AssignCompaniesPostBody;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation sharedCatalogCompanyManagementV1GetCompaniesGet
     *
     * @param  int $sharedCatalogId sharedCatalogId (required)
     *
     * @throws \Krak\MagentoApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return string
     */
    public function sharedCatalogCompanyManagementV1GetCompaniesGet($sharedCatalogId)
    {
        list($response) = $this->sharedCatalogCompanyManagementV1GetCompaniesGetWithHttpInfo($sharedCatalogId);
        return $response;
    }

    /**
     * Operation sharedCatalogCompanyManagementV1GetCompaniesGetWithHttpInfo
     *
     * @param  int $sharedCatalogId (required)
     *
     * @throws \Krak\MagentoApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of string, HTTP status code, HTTP response headers (array of strings)
     */
    public function sharedCatalogCompanyManagementV1GetCompaniesGetWithHttpInfo($sharedCatalogId)
    {
        $returnType = 'string';
        $request = $this->sharedCatalogCompanyManagementV1GetCompaniesGetRequest($sharedCatalogId);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'string',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Krak\MagentoApiClient\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Krak\MagentoApiClient\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation sharedCatalogCompanyManagementV1GetCompaniesGetAsync
     *
     * 
     *
     * @param  int $sharedCatalogId (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sharedCatalogCompanyManagementV1GetCompaniesGetAsync($sharedCatalogId)
    {
        return $this->sharedCatalogCompanyManagementV1GetCompaniesGetAsyncWithHttpInfo($sharedCatalogId)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation sharedCatalogCompanyManagementV1GetCompaniesGetAsyncWithHttpInfo
     *
     * 
     *
     * @param  int $sharedCatalogId (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sharedCatalogCompanyManagementV1GetCompaniesGetAsyncWithHttpInfo($sharedCatalogId)
    {
        $returnType = 'string';
        $request = $this->sharedCatalogCompanyManagementV1GetCompaniesGetRequest($sharedCatalogId);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'sharedCatalogCompanyManagementV1GetCompaniesGet'
     *
     * @param  int $sharedCatalogId (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function sharedCatalogCompanyManagementV1GetCompaniesGetRequest($sharedCatalogId)
    {
        // verify the required parameter 'sharedCatalogId' is set
        if ($sharedCatalogId === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sharedCatalogId when calling sharedCatalogCompanyManagementV1GetCompaniesGet'
            );
        }

        $resourcePath = '/V1/sharedCatalog/{sharedCatalogId}/companies';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($sharedCatalogId !== null) {
            $resourcePath = str_replace(
                '{' . 'sharedCatalogId' . '}',
                ObjectSerializer::toPathValue($sharedCatalogId),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation sharedCatalogCompanyManagementV1UnassignCompaniesPost
     *
     * @param  int $sharedCatalogId sharedCatalogId (required)
     * @param  \Krak\MagentoApiClient\Model\SharedCatalogCompanyManagementV1UnassignCompaniesPostBody $sharedCatalogCompanyManagementV1UnassignCompaniesPostBody sharedCatalogCompanyManagementV1UnassignCompaniesPostBody (optional)
     *
     * @throws \Krak\MagentoApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return bool
     */
    public function sharedCatalogCompanyManagementV1UnassignCompaniesPost($sharedCatalogId, $sharedCatalogCompanyManagementV1UnassignCompaniesPostBody = null)
    {
        list($response) = $this->sharedCatalogCompanyManagementV1UnassignCompaniesPostWithHttpInfo($sharedCatalogId, $sharedCatalogCompanyManagementV1UnassignCompaniesPostBody);
        return $response;
    }

    /**
     * Operation sharedCatalogCompanyManagementV1UnassignCompaniesPostWithHttpInfo
     *
     * @param  int $sharedCatalogId (required)
     * @param  \Krak\MagentoApiClient\Model\SharedCatalogCompanyManagementV1UnassignCompaniesPostBody $sharedCatalogCompanyManagementV1UnassignCompaniesPostBody (optional)
     *
     * @throws \Krak\MagentoApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of bool, HTTP status code, HTTP response headers (array of strings)
     */
    public function sharedCatalogCompanyManagementV1UnassignCompaniesPostWithHttpInfo($sharedCatalogId, $sharedCatalogCompanyManagementV1UnassignCompaniesPostBody = null)
    {
        $returnType = 'bool';
        $request = $this->sharedCatalogCompanyManagementV1UnassignCompaniesPostRequest($sharedCatalogId, $sharedCatalogCompanyManagementV1UnassignCompaniesPostBody);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'bool',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Krak\MagentoApiClient\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Krak\MagentoApiClient\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Krak\MagentoApiClient\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation sharedCatalogCompanyManagementV1UnassignCompaniesPostAsync
     *
     * 
     *
     * @param  int $sharedCatalogId (required)
     * @param  \Krak\MagentoApiClient\Model\SharedCatalogCompanyManagementV1UnassignCompaniesPostBody $sharedCatalogCompanyManagementV1UnassignCompaniesPostBody (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sharedCatalogCompanyManagementV1UnassignCompaniesPostAsync($sharedCatalogId, $sharedCatalogCompanyManagementV1UnassignCompaniesPostBody = null)
    {
        return $this->sharedCatalogCompanyManagementV1UnassignCompaniesPostAsyncWithHttpInfo($sharedCatalogId, $sharedCatalogCompanyManagementV1UnassignCompaniesPostBody)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation sharedCatalogCompanyManagementV1UnassignCompaniesPostAsyncWithHttpInfo
     *
     * 
     *
     * @param  int $sharedCatalogId (required)
     * @param  \Krak\MagentoApiClient\Model\SharedCatalogCompanyManagementV1UnassignCompaniesPostBody $sharedCatalogCompanyManagementV1UnassignCompaniesPostBody (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sharedCatalogCompanyManagementV1UnassignCompaniesPostAsyncWithHttpInfo($sharedCatalogId, $sharedCatalogCompanyManagementV1UnassignCompaniesPostBody = null)
    {
        $returnType = 'bool';
        $request = $this->sharedCatalogCompanyManagementV1UnassignCompaniesPostRequest($sharedCatalogId, $sharedCatalogCompanyManagementV1UnassignCompaniesPostBody);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'sharedCatalogCompanyManagementV1UnassignCompaniesPost'
     *
     * @param  int $sharedCatalogId (required)
     * @param  \Krak\MagentoApiClient\Model\SharedCatalogCompanyManagementV1UnassignCompaniesPostBody $sharedCatalogCompanyManagementV1UnassignCompaniesPostBody (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function sharedCatalogCompanyManagementV1UnassignCompaniesPostRequest($sharedCatalogId, $sharedCatalogCompanyManagementV1UnassignCompaniesPostBody = null)
    {
        // verify the required parameter 'sharedCatalogId' is set
        if ($sharedCatalogId === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sharedCatalogId when calling sharedCatalogCompanyManagementV1UnassignCompaniesPost'
            );
        }

        $resourcePath = '/V1/sharedCatalog/{sharedCatalogId}/unassignCompanies';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($sharedCatalogId !== null) {
            $resourcePath = str_replace(
                '{' . 'sharedCatalogId' . '}',
                ObjectSerializer::toPathValue($sharedCatalogId),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($sharedCatalogCompanyManagementV1UnassignCompaniesPostBody)) {
            $_tempBody = $sharedCatalogCompanyManagementV1UnassignCompaniesPostBody;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
