<?php
/**
 * RmaDataCommentInterface
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
 * RmaDataCommentInterface Class Doc Comment
 *
 * @category Class
 * @description Interface CommentInterface
 * @package  Krak\MagentoApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RmaDataCommentInterface implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'rma-data-comment-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'comment' => 'string',
        'rmaEntityId' => 'int',
        'createdAt' => 'string',
        'entityId' => 'int',
        'customerNotified' => 'bool',
        'visibleOnFront' => 'bool',
        'status' => 'string',
        'admin' => 'bool',
        'extensionAttributes' => '\Krak\MagentoApiClient\Model\RmaDataCommentExtensionInterface',
        'customAttributes' => '\Krak\MagentoApiClient\Model\FrameworkAttributeInterface[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'comment' => null,
        'rmaEntityId' => null,
        'createdAt' => null,
        'entityId' => null,
        'customerNotified' => null,
        'visibleOnFront' => null,
        'status' => null,
        'admin' => null,
        'extensionAttributes' => null,
        'customAttributes' => null
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
        'comment' => 'comment',
        'rmaEntityId' => 'rma_entity_id',
        'createdAt' => 'created_at',
        'entityId' => 'entity_id',
        'customerNotified' => 'customer_notified',
        'visibleOnFront' => 'visible_on_front',
        'status' => 'status',
        'admin' => 'admin',
        'extensionAttributes' => 'extension_attributes',
        'customAttributes' => 'custom_attributes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'comment' => 'setComment',
        'rmaEntityId' => 'setRmaEntityId',
        'createdAt' => 'setCreatedAt',
        'entityId' => 'setEntityId',
        'customerNotified' => 'setCustomerNotified',
        'visibleOnFront' => 'setVisibleOnFront',
        'status' => 'setStatus',
        'admin' => 'setAdmin',
        'extensionAttributes' => 'setExtensionAttributes',
        'customAttributes' => 'setCustomAttributes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'comment' => 'getComment',
        'rmaEntityId' => 'getRmaEntityId',
        'createdAt' => 'getCreatedAt',
        'entityId' => 'getEntityId',
        'customerNotified' => 'getCustomerNotified',
        'visibleOnFront' => 'getVisibleOnFront',
        'status' => 'getStatus',
        'admin' => 'getAdmin',
        'extensionAttributes' => 'getExtensionAttributes',
        'customAttributes' => 'getCustomAttributes'
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
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['rmaEntityId'] = isset($data['rmaEntityId']) ? $data['rmaEntityId'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['entityId'] = isset($data['entityId']) ? $data['entityId'] : null;
        $this->container['customerNotified'] = isset($data['customerNotified']) ? $data['customerNotified'] : null;
        $this->container['visibleOnFront'] = isset($data['visibleOnFront']) ? $data['visibleOnFront'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['admin'] = isset($data['admin']) ? $data['admin'] : null;
        $this->container['extensionAttributes'] = isset($data['extensionAttributes']) ? $data['extensionAttributes'] : null;
        $this->container['customAttributes'] = isset($data['customAttributes']) ? $data['customAttributes'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['comment'] === null) {
            $invalidProperties[] = "'comment' can't be null";
        }
        if ($this->container['rmaEntityId'] === null) {
            $invalidProperties[] = "'rmaEntityId' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['entityId'] === null) {
            $invalidProperties[] = "'entityId' can't be null";
        }
        if ($this->container['customerNotified'] === null) {
            $invalidProperties[] = "'customerNotified' can't be null";
        }
        if ($this->container['visibleOnFront'] === null) {
            $invalidProperties[] = "'visibleOnFront' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['admin'] === null) {
            $invalidProperties[] = "'admin' can't be null";
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

        if ($this->container['comment'] === null) {
            return false;
        }
        if ($this->container['rmaEntityId'] === null) {
            return false;
        }
        if ($this->container['createdAt'] === null) {
            return false;
        }
        if ($this->container['entityId'] === null) {
            return false;
        }
        if ($this->container['customerNotified'] === null) {
            return false;
        }
        if ($this->container['visibleOnFront'] === null) {
            return false;
        }
        if ($this->container['status'] === null) {
            return false;
        }
        if ($this->container['admin'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string $comment Comment
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets rmaEntityId
     *
     * @return int
     */
    public function getRmaEntityId()
    {
        return $this->container['rmaEntityId'];
    }

    /**
     * Sets rmaEntityId
     *
     * @param int $rmaEntityId Rma Id
     *
     * @return $this
     */
    public function setRmaEntityId($rmaEntityId)
    {
        $this->container['rmaEntityId'] = $rmaEntityId;

        return $this;
    }

    /**
     * Gets createdAt
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     *
     * @param string $createdAt Created_at
     *
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets entityId
     *
     * @return int
     */
    public function getEntityId()
    {
        return $this->container['entityId'];
    }

    /**
     * Sets entityId
     *
     * @param int $entityId Entity_id
     *
     * @return $this
     */
    public function setEntityId($entityId)
    {
        $this->container['entityId'] = $entityId;

        return $this;
    }

    /**
     * Gets customerNotified
     *
     * @return bool
     */
    public function getCustomerNotified()
    {
        return $this->container['customerNotified'];
    }

    /**
     * Sets customerNotified
     *
     * @param bool $customerNotified Is_customer_notified
     *
     * @return $this
     */
    public function setCustomerNotified($customerNotified)
    {
        $this->container['customerNotified'] = $customerNotified;

        return $this;
    }

    /**
     * Gets visibleOnFront
     *
     * @return bool
     */
    public function getVisibleOnFront()
    {
        return $this->container['visibleOnFront'];
    }

    /**
     * Sets visibleOnFront
     *
     * @param bool $visibleOnFront Is_visible_on_front
     *
     * @return $this
     */
    public function setVisibleOnFront($visibleOnFront)
    {
        $this->container['visibleOnFront'] = $visibleOnFront;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets admin
     *
     * @return bool
     */
    public function getAdmin()
    {
        return $this->container['admin'];
    }

    /**
     * Sets admin
     *
     * @param bool $admin Is_admin
     *
     * @return $this
     */
    public function setAdmin($admin)
    {
        $this->container['admin'] = $admin;

        return $this;
    }

    /**
     * Gets extensionAttributes
     *
     * @return \Krak\MagentoApiClient\Model\RmaDataCommentExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extensionAttributes'];
    }

    /**
     * Sets extensionAttributes
     *
     * @param \Krak\MagentoApiClient\Model\RmaDataCommentExtensionInterface $extensionAttributes extensionAttributes
     *
     * @return $this
     */
    public function setExtensionAttributes($extensionAttributes)
    {
        $this->container['extensionAttributes'] = $extensionAttributes;

        return $this;
    }

    /**
     * Gets customAttributes
     *
     * @return \Krak\MagentoApiClient\Model\FrameworkAttributeInterface[]
     */
    public function getCustomAttributes()
    {
        return $this->container['customAttributes'];
    }

    /**
     * Sets customAttributes
     *
     * @param \Krak\MagentoApiClient\Model\FrameworkAttributeInterface[] $customAttributes Custom attributes values.
     *
     * @return $this
     */
    public function setCustomAttributes($customAttributes)
    {
        $this->container['customAttributes'] = $customAttributes;

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


