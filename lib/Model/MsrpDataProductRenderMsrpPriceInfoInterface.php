<?php
/**
 * MsrpDataProductRenderMsrpPriceInfoInterface
 *
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

namespace Krak\MagentoApiClient\Model;

use \ArrayAccess;
use \Krak\MagentoApiClient\ObjectSerializer;

/**
 * MsrpDataProductRenderMsrpPriceInfoInterface Class Doc Comment
 *
 * @category Class
 * @description Price interface.
 * @package  Krak\MagentoApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MsrpDataProductRenderMsrpPriceInfoInterface implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'msrp-data-product-render-msrp-price-info-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'msrpPrice' => 'string',
        'isApplicable' => 'string',
        'isShownPriceOnGesture' => 'string',
        'msrpMessage' => 'string',
        'explanationMessage' => 'string',
        'extensionAttributes' => '\Krak\MagentoApiClient\Model\MsrpDataProductRenderMsrpPriceInfoExtensionInterface'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'msrpPrice' => null,
        'isApplicable' => null,
        'isShownPriceOnGesture' => null,
        'msrpMessage' => null,
        'explanationMessage' => null,
        'extensionAttributes' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'msrpPrice' => 'msrp_price',
        'isApplicable' => 'is_applicable',
        'isShownPriceOnGesture' => 'is_shown_price_on_gesture',
        'msrpMessage' => 'msrp_message',
        'explanationMessage' => 'explanation_message',
        'extensionAttributes' => 'extension_attributes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'msrpPrice' => 'setMsrpPrice',
        'isApplicable' => 'setIsApplicable',
        'isShownPriceOnGesture' => 'setIsShownPriceOnGesture',
        'msrpMessage' => 'setMsrpMessage',
        'explanationMessage' => 'setExplanationMessage',
        'extensionAttributes' => 'setExtensionAttributes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'msrpPrice' => 'getMsrpPrice',
        'isApplicable' => 'getIsApplicable',
        'isShownPriceOnGesture' => 'getIsShownPriceOnGesture',
        'msrpMessage' => 'getMsrpMessage',
        'explanationMessage' => 'getExplanationMessage',
        'extensionAttributes' => 'getExtensionAttributes'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['msrpPrice'] = isset($data['msrpPrice']) ? $data['msrpPrice'] : null;
        $this->container['isApplicable'] = isset($data['isApplicable']) ? $data['isApplicable'] : null;
        $this->container['isShownPriceOnGesture'] = isset($data['isShownPriceOnGesture']) ? $data['isShownPriceOnGesture'] : null;
        $this->container['msrpMessage'] = isset($data['msrpMessage']) ? $data['msrpMessage'] : null;
        $this->container['explanationMessage'] = isset($data['explanationMessage']) ? $data['explanationMessage'] : null;
        $this->container['extensionAttributes'] = isset($data['extensionAttributes']) ? $data['extensionAttributes'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['msrpPrice'] === null) {
            $invalidProperties[] = "'msrpPrice' can't be null";
        }
        if ($this->container['isApplicable'] === null) {
            $invalidProperties[] = "'isApplicable' can't be null";
        }
        if ($this->container['isShownPriceOnGesture'] === null) {
            $invalidProperties[] = "'isShownPriceOnGesture' can't be null";
        }
        if ($this->container['msrpMessage'] === null) {
            $invalidProperties[] = "'msrpMessage' can't be null";
        }
        if ($this->container['explanationMessage'] === null) {
            $invalidProperties[] = "'explanationMessage' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['msrpPrice'] === null) {
            return false;
        }
        if ($this->container['isApplicable'] === null) {
            return false;
        }
        if ($this->container['isShownPriceOnGesture'] === null) {
            return false;
        }
        if ($this->container['msrpMessage'] === null) {
            return false;
        }
        if ($this->container['explanationMessage'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets msrpPrice
     *
     * @return string
     */
    public function getMsrpPrice()
    {
        return $this->container['msrpPrice'];
    }

    /**
     * Sets msrpPrice
     *
     * @param string $msrpPrice msrpPrice
     *
     * @return $this
     */
    public function setMsrpPrice($msrpPrice)
    {
        $this->container['msrpPrice'] = $msrpPrice;

        return $this;
    }

    /**
     * Gets isApplicable
     *
     * @return string
     */
    public function getIsApplicable()
    {
        return $this->container['isApplicable'];
    }

    /**
     * Sets isApplicable
     *
     * @param string $isApplicable isApplicable
     *
     * @return $this
     */
    public function setIsApplicable($isApplicable)
    {
        $this->container['isApplicable'] = $isApplicable;

        return $this;
    }

    /**
     * Gets isShownPriceOnGesture
     *
     * @return string
     */
    public function getIsShownPriceOnGesture()
    {
        return $this->container['isShownPriceOnGesture'];
    }

    /**
     * Sets isShownPriceOnGesture
     *
     * @param string $isShownPriceOnGesture isShownPriceOnGesture
     *
     * @return $this
     */
    public function setIsShownPriceOnGesture($isShownPriceOnGesture)
    {
        $this->container['isShownPriceOnGesture'] = $isShownPriceOnGesture;

        return $this;
    }

    /**
     * Gets msrpMessage
     *
     * @return string
     */
    public function getMsrpMessage()
    {
        return $this->container['msrpMessage'];
    }

    /**
     * Sets msrpMessage
     *
     * @param string $msrpMessage msrpMessage
     *
     * @return $this
     */
    public function setMsrpMessage($msrpMessage)
    {
        $this->container['msrpMessage'] = $msrpMessage;

        return $this;
    }

    /**
     * Gets explanationMessage
     *
     * @return string
     */
    public function getExplanationMessage()
    {
        return $this->container['explanationMessage'];
    }

    /**
     * Sets explanationMessage
     *
     * @param string $explanationMessage explanationMessage
     *
     * @return $this
     */
    public function setExplanationMessage($explanationMessage)
    {
        $this->container['explanationMessage'] = $explanationMessage;

        return $this;
    }

    /**
     * Gets extensionAttributes
     *
     * @return \Krak\MagentoApiClient\Model\MsrpDataProductRenderMsrpPriceInfoExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extensionAttributes'];
    }

    /**
     * Sets extensionAttributes
     *
     * @param \Krak\MagentoApiClient\Model\MsrpDataProductRenderMsrpPriceInfoExtensionInterface $extensionAttributes extensionAttributes
     *
     * @return $this
     */
    public function setExtensionAttributes($extensionAttributes)
    {
        $this->container['extensionAttributes'] = $extensionAttributes;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


