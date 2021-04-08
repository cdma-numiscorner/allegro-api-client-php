<?php
/**
 * Offer
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Allegro REST API
 *
 * https://developer.allegro.pl/about  Documentation is generated from [this](https://developer.allegro.pl/swagger.yaml) OpenAPI 3.0 specification file.
 *
 * The version of the OpenAPI document: latest
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AllegroApi\Model;

use \ArrayAccess;
use \AllegroApi\ObjectSerializer;

/**
 * Offer Class Doc Comment
 *
 * @category Class
 * @description Single offer data.
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Offer implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Offer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'additional_services' => '\AllegroApi\Model\JustId',
        'after_sales_services' => '\AllegroApi\Model\AfterSalesServices',
        'attachments' => '\AllegroApi\Model\Attachment[]',
        'category' => 'Category',
        'compatibility_list' => '\AllegroApi\Model\CompatibilityList',
        'contact' => '\AllegroApi\Model\JustId',
        'created_at' => '\DateTime',
        'delivery' => '\AllegroApi\Model\Delivery',
        'description' => '\AllegroApi\Model\StandardizedDescription',
        'external' => '\AllegroApi\Model\ExternalId',
        'id' => 'string',
        'images' => '\AllegroApi\Model\ImageUrl[]',
        'location' => '\AllegroApi\Model\Location',
        'name' => 'string',
        'parameters' => '\AllegroApi\Model\Parameter[]',
        'payments' => '\AllegroApi\Model\Payments',
        'product' => '\AllegroApi\Model\JustId',
        'promotion' => '\AllegroApi\Model\Promotion',
        'publication' => '\AllegroApi\Model\Publication',
        'selling_mode' => '\AllegroApi\Model\SellingMode',
        'tax' => '\AllegroApi\Model\Tax',
        'size_table' => '\AllegroApi\Model\JustId',
        'stock' => '\AllegroApi\Model\Stock',
        'tecdoc_specification' => '\AllegroApi\Model\TecdocSpecification',
        'updated_at' => '\DateTime',
        'validation' => '\AllegroApi\Model\Validation'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'additional_services' => null,
        'after_sales_services' => null,
        'attachments' => null,
        'category' => null,
        'compatibility_list' => null,
        'contact' => null,
        'created_at' => 'date-time',
        'delivery' => null,
        'description' => null,
        'external' => null,
        'id' => null,
        'images' => null,
        'location' => null,
        'name' => null,
        'parameters' => null,
        'payments' => null,
        'product' => null,
        'promotion' => null,
        'publication' => null,
        'selling_mode' => null,
        'tax' => null,
        'size_table' => null,
        'stock' => null,
        'tecdoc_specification' => null,
        'updated_at' => 'date-time',
        'validation' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'additional_services' => 'additionalServices',
        'after_sales_services' => 'afterSalesServices',
        'attachments' => 'attachments',
        'category' => 'category',
        'compatibility_list' => 'compatibilityList',
        'contact' => 'contact',
        'created_at' => 'createdAt',
        'delivery' => 'delivery',
        'description' => 'description',
        'external' => 'external',
        'id' => 'id',
        'images' => 'images',
        'location' => 'location',
        'name' => 'name',
        'parameters' => 'parameters',
        'payments' => 'payments',
        'product' => 'product',
        'promotion' => 'promotion',
        'publication' => 'publication',
        'selling_mode' => 'sellingMode',
        'tax' => 'tax',
        'size_table' => 'sizeTable',
        'stock' => 'stock',
        'tecdoc_specification' => 'tecdocSpecification',
        'updated_at' => 'updatedAt',
        'validation' => 'validation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'additional_services' => 'setAdditionalServices',
        'after_sales_services' => 'setAfterSalesServices',
        'attachments' => 'setAttachments',
        'category' => 'setCategory',
        'compatibility_list' => 'setCompatibilityList',
        'contact' => 'setContact',
        'created_at' => 'setCreatedAt',
        'delivery' => 'setDelivery',
        'description' => 'setDescription',
        'external' => 'setExternal',
        'id' => 'setId',
        'images' => 'setImages',
        'location' => 'setLocation',
        'name' => 'setName',
        'parameters' => 'setParameters',
        'payments' => 'setPayments',
        'product' => 'setProduct',
        'promotion' => 'setPromotion',
        'publication' => 'setPublication',
        'selling_mode' => 'setSellingMode',
        'tax' => 'setTax',
        'size_table' => 'setSizeTable',
        'stock' => 'setStock',
        'tecdoc_specification' => 'setTecdocSpecification',
        'updated_at' => 'setUpdatedAt',
        'validation' => 'setValidation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'additional_services' => 'getAdditionalServices',
        'after_sales_services' => 'getAfterSalesServices',
        'attachments' => 'getAttachments',
        'category' => 'getCategory',
        'compatibility_list' => 'getCompatibilityList',
        'contact' => 'getContact',
        'created_at' => 'getCreatedAt',
        'delivery' => 'getDelivery',
        'description' => 'getDescription',
        'external' => 'getExternal',
        'id' => 'getId',
        'images' => 'getImages',
        'location' => 'getLocation',
        'name' => 'getName',
        'parameters' => 'getParameters',
        'payments' => 'getPayments',
        'product' => 'getProduct',
        'promotion' => 'getPromotion',
        'publication' => 'getPublication',
        'selling_mode' => 'getSellingMode',
        'tax' => 'getTax',
        'size_table' => 'getSizeTable',
        'stock' => 'getStock',
        'tecdoc_specification' => 'getTecdocSpecification',
        'updated_at' => 'getUpdatedAt',
        'validation' => 'getValidation'
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
        return self::$openAPIModelName;
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
        $this->container['additional_services'] = $data['additional_services'] ?? null;
        $this->container['after_sales_services'] = $data['after_sales_services'] ?? null;
        $this->container['attachments'] = $data['attachments'] ?? null;
        $this->container['category'] = $data['category'] ?? null;
        $this->container['compatibility_list'] = $data['compatibility_list'] ?? null;
        $this->container['contact'] = $data['contact'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['delivery'] = $data['delivery'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['external'] = $data['external'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['images'] = $data['images'] ?? null;
        $this->container['location'] = $data['location'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['parameters'] = $data['parameters'] ?? null;
        $this->container['payments'] = $data['payments'] ?? null;
        $this->container['product'] = $data['product'] ?? null;
        $this->container['promotion'] = $data['promotion'] ?? null;
        $this->container['publication'] = $data['publication'] ?? null;
        $this->container['selling_mode'] = $data['selling_mode'] ?? null;
        $this->container['tax'] = $data['tax'] ?? null;
        $this->container['size_table'] = $data['size_table'] ?? null;
        $this->container['stock'] = $data['stock'] ?? null;
        $this->container['tecdoc_specification'] = $data['tecdoc_specification'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['validation'] = $data['validation'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 50)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 50.";
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets additional_services
     *
     * @return \AllegroApi\Model\JustId|null
     */
    public function getAdditionalServices()
    {
        return $this->container['additional_services'];
    }

    /**
     * Sets additional_services
     *
     * @param \AllegroApi\Model\JustId|null $additional_services additional_services
     *
     * @return self
     */
    public function setAdditionalServices($additional_services)
    {
        $this->container['additional_services'] = $additional_services;

        return $this;
    }

    /**
     * Gets after_sales_services
     *
     * @return \AllegroApi\Model\AfterSalesServices|null
     */
    public function getAfterSalesServices()
    {
        return $this->container['after_sales_services'];
    }

    /**
     * Sets after_sales_services
     *
     * @param \AllegroApi\Model\AfterSalesServices|null $after_sales_services after_sales_services
     *
     * @return self
     */
    public function setAfterSalesServices($after_sales_services)
    {
        $this->container['after_sales_services'] = $after_sales_services;

        return $this;
    }

    /**
     * Gets attachments
     *
     * @return \AllegroApi\Model\Attachment[]|null
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param \AllegroApi\Model\Attachment[]|null $attachments List of offer attachments. You can attach up to 7 files to the offer – one per each attachment type as described in <a href=\"/documentation/#operation/createOfferAttachmentUsingPOST\" target=\"_blank\">uploading offer attachments flow</a>.
     *
     * @return self
     */
    public function setAttachments($attachments)
    {
        $this->container['attachments'] = $attachments;

        return $this;
    }

    /**
     * Gets category
     *
     * @return Category|null
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param Category|null $category category
     *
     * @return self
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets compatibility_list
     *
     * @return \AllegroApi\Model\CompatibilityList|null
     */
    public function getCompatibilityList()
    {
        return $this->container['compatibility_list'];
    }

    /**
     * Sets compatibility_list
     *
     * @param \AllegroApi\Model\CompatibilityList|null $compatibility_list compatibility_list
     *
     * @return self
     */
    public function setCompatibilityList($compatibility_list)
    {
        $this->container['compatibility_list'] = $compatibility_list;

        return $this;
    }

    /**
     * Gets contact
     *
     * @return \AllegroApi\Model\JustId|null
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     *
     * @param \AllegroApi\Model\JustId|null $contact contact
     *
     * @return self
     */
    public function setContact($contact)
    {
        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at Creation date: Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ. Cannot be modified.
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets delivery
     *
     * @return \AllegroApi\Model\Delivery|null
     */
    public function getDelivery()
    {
        return $this->container['delivery'];
    }

    /**
     * Sets delivery
     *
     * @param \AllegroApi\Model\Delivery|null $delivery delivery
     *
     * @return self
     */
    public function setDelivery($delivery)
    {
        $this->container['delivery'] = $delivery;

        return $this;
    }

    /**
     * Gets description
     *
     * @return \AllegroApi\Model\StandardizedDescription|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param \AllegroApi\Model\StandardizedDescription|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets external
     *
     * @return \AllegroApi\Model\ExternalId|null
     */
    public function getExternal()
    {
        return $this->container['external'];
    }

    /**
     * Sets external
     *
     * @param \AllegroApi\Model\ExternalId|null $external external
     *
     * @return self
     */
    public function setExternal($external)
    {
        $this->container['external'] = $external;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets images
     *
     * @return \AllegroApi\Model\ImageUrl[]|null
     */
    public function getImages()
    {
        return $this->container['images'];
    }

    /**
     * Sets images
     *
     * @param \AllegroApi\Model\ImageUrl[]|null $images images
     *
     * @return self
     */
    public function setImages($images)
    {
        $this->container['images'] = $images;

        return $this;
    }

    /**
     * Gets location
     *
     * @return \AllegroApi\Model\Location|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param \AllegroApi\Model\Location|null $location location
     *
     * @return self
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of the offer. Words used in the name field cannot be longer than 50 characters.
     *
     * @return self
     */
    public function setName($name)
    {
        if ((mb_strlen($name) > 50)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Offer., must be smaller than or equal to 50.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets parameters
     *
     * @return \AllegroApi\Model\Parameter[]|null
     */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
     * Sets parameters
     *
     * @param \AllegroApi\Model\Parameter[]|null $parameters parameters
     *
     * @return self
     */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;

        return $this;
    }

    /**
     * Gets payments
     *
     * @return \AllegroApi\Model\Payments|null
     */
    public function getPayments()
    {
        return $this->container['payments'];
    }

    /**
     * Sets payments
     *
     * @param \AllegroApi\Model\Payments|null $payments payments
     *
     * @return self
     */
    public function setPayments($payments)
    {
        $this->container['payments'] = $payments;

        return $this;
    }

    /**
     * Gets product
     *
     * @return \AllegroApi\Model\JustId|null
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param \AllegroApi\Model\JustId|null $product product
     *
     * @return self
     */
    public function setProduct($product)
    {
        $this->container['product'] = $product;

        return $this;
    }

    /**
     * Gets promotion
     *
     * @return \AllegroApi\Model\Promotion|null
     */
    public function getPromotion()
    {
        return $this->container['promotion'];
    }

    /**
     * Sets promotion
     *
     * @param \AllegroApi\Model\Promotion|null $promotion promotion
     *
     * @return self
     */
    public function setPromotion($promotion)
    {
        $this->container['promotion'] = $promotion;

        return $this;
    }

    /**
     * Gets publication
     *
     * @return \AllegroApi\Model\Publication|null
     */
    public function getPublication()
    {
        return $this->container['publication'];
    }

    /**
     * Sets publication
     *
     * @param \AllegroApi\Model\Publication|null $publication publication
     *
     * @return self
     */
    public function setPublication($publication)
    {
        $this->container['publication'] = $publication;

        return $this;
    }

    /**
     * Gets selling_mode
     *
     * @return \AllegroApi\Model\SellingMode|null
     */
    public function getSellingMode()
    {
        return $this->container['selling_mode'];
    }

    /**
     * Sets selling_mode
     *
     * @param \AllegroApi\Model\SellingMode|null $selling_mode selling_mode
     *
     * @return self
     */
    public function setSellingMode($selling_mode)
    {
        $this->container['selling_mode'] = $selling_mode;

        return $this;
    }

    /**
     * Gets tax
     *
     * @return \AllegroApi\Model\Tax|null
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     *
     * @param \AllegroApi\Model\Tax|null $tax tax
     *
     * @return self
     */
    public function setTax($tax)
    {
        $this->container['tax'] = $tax;

        return $this;
    }

    /**
     * Gets size_table
     *
     * @return \AllegroApi\Model\JustId|null
     */
    public function getSizeTable()
    {
        return $this->container['size_table'];
    }

    /**
     * Sets size_table
     *
     * @param \AllegroApi\Model\JustId|null $size_table size_table
     *
     * @return self
     */
    public function setSizeTable($size_table)
    {
        $this->container['size_table'] = $size_table;

        return $this;
    }

    /**
     * Gets stock
     *
     * @return \AllegroApi\Model\Stock|null
     */
    public function getStock()
    {
        return $this->container['stock'];
    }

    /**
     * Sets stock
     *
     * @param \AllegroApi\Model\Stock|null $stock stock
     *
     * @return self
     */
    public function setStock($stock)
    {
        $this->container['stock'] = $stock;

        return $this;
    }

    /**
     * Gets tecdoc_specification
     *
     * @return \AllegroApi\Model\TecdocSpecification|null
     */
    public function getTecdocSpecification()
    {
        return $this->container['tecdoc_specification'];
    }

    /**
     * Sets tecdoc_specification
     *
     * @param \AllegroApi\Model\TecdocSpecification|null $tecdoc_specification tecdoc_specification
     *
     * @return self
     */
    public function setTecdocSpecification($tecdoc_specification)
    {
        $this->container['tecdoc_specification'] = $tecdoc_specification;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime|null $updated_at Last update date: Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ. Cannot be modified
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets validation
     *
     * @return \AllegroApi\Model\Validation|null
     */
    public function getValidation()
    {
        return $this->container['validation'];
    }

    /**
     * Sets validation
     *
     * @param \AllegroApi\Model\Validation|null $validation validation
     *
     * @return self
     */
    public function setValidation($validation)
    {
        $this->container['validation'] = $validation;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


