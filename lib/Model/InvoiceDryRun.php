<?php
/**
 * InvoiceDryRun
 *
 * PHP version 5
 *
 * @category Class
 * @package  Killbill\Client\Swagger
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Kill Bill
 *
 * Kill Bill is an open-source billing and payments platform
 *
 * OpenAPI spec version: 0.20.11
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.8
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Killbill\Client\Swagger\Model;

use \ArrayAccess;
use \Killbill\Client\Swagger\ObjectSerializer;

/**
 * InvoiceDryRun Class Doc Comment
 *
 * @category Class
 * @package  Killbill\Client\Swagger
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InvoiceDryRun implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InvoiceDryRun';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'dryRunType' => 'string',
'dryRunAction' => 'string',
'phaseType' => 'string',
'productName' => 'string',
'productCategory' => 'string',
'billingPeriod' => 'string',
'priceListName' => 'string',
'subscriptionId' => 'string',
'bundleId' => 'string',
'effectiveDate' => '\DateTime',
'billingPolicy' => 'string',
'priceOverrides' => '\Killbill\Client\Swagger\Model\PhasePrice[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'dryRunType' => null,
'dryRunAction' => null,
'phaseType' => null,
'productName' => null,
'productCategory' => null,
'billingPeriod' => null,
'priceListName' => null,
'subscriptionId' => 'uuid',
'bundleId' => 'uuid',
'effectiveDate' => 'date',
'billingPolicy' => null,
'priceOverrides' => null    ];

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
        'dryRunType' => 'dryRunType',
'dryRunAction' => 'dryRunAction',
'phaseType' => 'phaseType',
'productName' => 'productName',
'productCategory' => 'productCategory',
'billingPeriod' => 'billingPeriod',
'priceListName' => 'priceListName',
'subscriptionId' => 'subscriptionId',
'bundleId' => 'bundleId',
'effectiveDate' => 'effectiveDate',
'billingPolicy' => 'billingPolicy',
'priceOverrides' => 'priceOverrides'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dryRunType' => 'setDryRunType',
'dryRunAction' => 'setDryRunAction',
'phaseType' => 'setPhaseType',
'productName' => 'setProductName',
'productCategory' => 'setProductCategory',
'billingPeriod' => 'setBillingPeriod',
'priceListName' => 'setPriceListName',
'subscriptionId' => 'setSubscriptionId',
'bundleId' => 'setBundleId',
'effectiveDate' => 'setEffectiveDate',
'billingPolicy' => 'setBillingPolicy',
'priceOverrides' => 'setPriceOverrides'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dryRunType' => 'getDryRunType',
'dryRunAction' => 'getDryRunAction',
'phaseType' => 'getPhaseType',
'productName' => 'getProductName',
'productCategory' => 'getProductCategory',
'billingPeriod' => 'getBillingPeriod',
'priceListName' => 'getPriceListName',
'subscriptionId' => 'getSubscriptionId',
'bundleId' => 'getBundleId',
'effectiveDate' => 'getEffectiveDate',
'billingPolicy' => 'getBillingPolicy',
'priceOverrides' => 'getPriceOverrides'    ];

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

    const DRY_RUN_TYPE_TARGET_DATE = 'TARGET_DATE';
const DRY_RUN_TYPE_UPCOMING_INVOICE = 'UPCOMING_INVOICE';
const DRY_RUN_TYPE_SUBSCRIPTION_ACTION = 'SUBSCRIPTION_ACTION';
const DRY_RUN_ACTION_START_ENTITLEMENT = 'START_ENTITLEMENT';
const DRY_RUN_ACTION_START_BILLING = 'START_BILLING';
const DRY_RUN_ACTION_PAUSE_ENTITLEMENT = 'PAUSE_ENTITLEMENT';
const DRY_RUN_ACTION_PAUSE_BILLING = 'PAUSE_BILLING';
const DRY_RUN_ACTION_RESUME_ENTITLEMENT = 'RESUME_ENTITLEMENT';
const DRY_RUN_ACTION_RESUME_BILLING = 'RESUME_BILLING';
const DRY_RUN_ACTION_PHASE = 'PHASE';
const DRY_RUN_ACTION_CHANGE = 'CHANGE';
const DRY_RUN_ACTION_STOP_ENTITLEMENT = 'STOP_ENTITLEMENT';
const DRY_RUN_ACTION_STOP_BILLING = 'STOP_BILLING';
const DRY_RUN_ACTION_SERVICE_STATE_CHANGE = 'SERVICE_STATE_CHANGE';
const PHASE_TYPE_TRIAL = 'TRIAL';
const PHASE_TYPE_DISCOUNT = 'DISCOUNT';
const PHASE_TYPE_FIXEDTERM = 'FIXEDTERM';
const PHASE_TYPE_EVERGREEN = 'EVERGREEN';
const PRODUCT_CATEGORY_BASE = 'BASE';
const PRODUCT_CATEGORY_ADD_ON = 'ADD_ON';
const PRODUCT_CATEGORY_STANDALONE = 'STANDALONE';
const BILLING_PERIOD_DAILY = 'DAILY';
const BILLING_PERIOD_WEEKLY = 'WEEKLY';
const BILLING_PERIOD_BIWEEKLY = 'BIWEEKLY';
const BILLING_PERIOD_THIRTY_DAYS = 'THIRTY_DAYS';
const BILLING_PERIOD_SIXTY_DAYS = 'SIXTY_DAYS';
const BILLING_PERIOD_NINETY_DAYS = 'NINETY_DAYS';
const BILLING_PERIOD_MONTHLY = 'MONTHLY';
const BILLING_PERIOD_BIMESTRIAL = 'BIMESTRIAL';
const BILLING_PERIOD_QUARTERLY = 'QUARTERLY';
const BILLING_PERIOD_TRIANNUAL = 'TRIANNUAL';
const BILLING_PERIOD_BIANNUAL = 'BIANNUAL';
const BILLING_PERIOD_ANNUAL = 'ANNUAL';
const BILLING_PERIOD_BIENNIAL = 'BIENNIAL';
const BILLING_PERIOD_NO_BILLING_PERIOD = 'NO_BILLING_PERIOD';
const BILLING_POLICY_START_OF_TERM = 'START_OF_TERM';
const BILLING_POLICY_END_OF_TERM = 'END_OF_TERM';
const BILLING_POLICY_IMMEDIATE = 'IMMEDIATE';
const BILLING_POLICY_ILLEGAL = 'ILLEGAL';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDryRunTypeAllowableValues()
    {
        return [
            self::DRY_RUN_TYPE_TARGET_DATE,
self::DRY_RUN_TYPE_UPCOMING_INVOICE,
self::DRY_RUN_TYPE_SUBSCRIPTION_ACTION,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDryRunActionAllowableValues()
    {
        return [
            self::DRY_RUN_ACTION_START_ENTITLEMENT,
self::DRY_RUN_ACTION_START_BILLING,
self::DRY_RUN_ACTION_PAUSE_ENTITLEMENT,
self::DRY_RUN_ACTION_PAUSE_BILLING,
self::DRY_RUN_ACTION_RESUME_ENTITLEMENT,
self::DRY_RUN_ACTION_RESUME_BILLING,
self::DRY_RUN_ACTION_PHASE,
self::DRY_RUN_ACTION_CHANGE,
self::DRY_RUN_ACTION_STOP_ENTITLEMENT,
self::DRY_RUN_ACTION_STOP_BILLING,
self::DRY_RUN_ACTION_SERVICE_STATE_CHANGE,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPhaseTypeAllowableValues()
    {
        return [
            self::PHASE_TYPE_TRIAL,
self::PHASE_TYPE_DISCOUNT,
self::PHASE_TYPE_FIXEDTERM,
self::PHASE_TYPE_EVERGREEN,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProductCategoryAllowableValues()
    {
        return [
            self::PRODUCT_CATEGORY_BASE,
self::PRODUCT_CATEGORY_ADD_ON,
self::PRODUCT_CATEGORY_STANDALONE,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBillingPeriodAllowableValues()
    {
        return [
            self::BILLING_PERIOD_DAILY,
self::BILLING_PERIOD_WEEKLY,
self::BILLING_PERIOD_BIWEEKLY,
self::BILLING_PERIOD_THIRTY_DAYS,
self::BILLING_PERIOD_SIXTY_DAYS,
self::BILLING_PERIOD_NINETY_DAYS,
self::BILLING_PERIOD_MONTHLY,
self::BILLING_PERIOD_BIMESTRIAL,
self::BILLING_PERIOD_QUARTERLY,
self::BILLING_PERIOD_TRIANNUAL,
self::BILLING_PERIOD_BIANNUAL,
self::BILLING_PERIOD_ANNUAL,
self::BILLING_PERIOD_BIENNIAL,
self::BILLING_PERIOD_NO_BILLING_PERIOD,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBillingPolicyAllowableValues()
    {
        return [
            self::BILLING_POLICY_START_OF_TERM,
self::BILLING_POLICY_END_OF_TERM,
self::BILLING_POLICY_IMMEDIATE,
self::BILLING_POLICY_ILLEGAL,        ];
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
        $this->container['dryRunType'] = isset($data['dryRunType']) ? $data['dryRunType'] : null;
        $this->container['dryRunAction'] = isset($data['dryRunAction']) ? $data['dryRunAction'] : null;
        $this->container['phaseType'] = isset($data['phaseType']) ? $data['phaseType'] : null;
        $this->container['productName'] = isset($data['productName']) ? $data['productName'] : null;
        $this->container['productCategory'] = isset($data['productCategory']) ? $data['productCategory'] : null;
        $this->container['billingPeriod'] = isset($data['billingPeriod']) ? $data['billingPeriod'] : null;
        $this->container['priceListName'] = isset($data['priceListName']) ? $data['priceListName'] : null;
        $this->container['subscriptionId'] = isset($data['subscriptionId']) ? $data['subscriptionId'] : null;
        $this->container['bundleId'] = isset($data['bundleId']) ? $data['bundleId'] : null;
        $this->container['effectiveDate'] = isset($data['effectiveDate']) ? $data['effectiveDate'] : null;
        $this->container['billingPolicy'] = isset($data['billingPolicy']) ? $data['billingPolicy'] : null;
        $this->container['priceOverrides'] = isset($data['priceOverrides']) ? $data['priceOverrides'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getDryRunTypeAllowableValues();
        if (!is_null($this->container['dryRunType']) && !in_array($this->container['dryRunType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'dryRunType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getDryRunActionAllowableValues();
        if (!is_null($this->container['dryRunAction']) && !in_array($this->container['dryRunAction'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'dryRunAction', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPhaseTypeAllowableValues();
        if (!is_null($this->container['phaseType']) && !in_array($this->container['phaseType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'phaseType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getProductCategoryAllowableValues();
        if (!is_null($this->container['productCategory']) && !in_array($this->container['productCategory'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'productCategory', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getBillingPeriodAllowableValues();
        if (!is_null($this->container['billingPeriod']) && !in_array($this->container['billingPeriod'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'billingPeriod', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getBillingPolicyAllowableValues();
        if (!is_null($this->container['billingPolicy']) && !in_array($this->container['billingPolicy'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'billingPolicy', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets dryRunType
     *
     * @return string
     */
    public function getDryRunType()
    {
        return $this->container['dryRunType'];
    }

    /**
     * Sets dryRunType
     *
     * @param string $dryRunType dryRunType
     *
     * @return $this
     */
    public function setDryRunType($dryRunType)
    {
        $allowedValues = $this->getDryRunTypeAllowableValues();
        if (!is_null($dryRunType) && !in_array($dryRunType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'dryRunType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['dryRunType'] = $dryRunType;

        return $this;
    }

    /**
     * Gets dryRunAction
     *
     * @return string
     */
    public function getDryRunAction()
    {
        return $this->container['dryRunAction'];
    }

    /**
     * Sets dryRunAction
     *
     * @param string $dryRunAction dryRunAction
     *
     * @return $this
     */
    public function setDryRunAction($dryRunAction)
    {
        $allowedValues = $this->getDryRunActionAllowableValues();
        if (!is_null($dryRunAction) && !in_array($dryRunAction, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'dryRunAction', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['dryRunAction'] = $dryRunAction;

        return $this;
    }

    /**
     * Gets phaseType
     *
     * @return string
     */
    public function getPhaseType()
    {
        return $this->container['phaseType'];
    }

    /**
     * Sets phaseType
     *
     * @param string $phaseType phaseType
     *
     * @return $this
     */
    public function setPhaseType($phaseType)
    {
        $allowedValues = $this->getPhaseTypeAllowableValues();
        if (!is_null($phaseType) && !in_array($phaseType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'phaseType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['phaseType'] = $phaseType;

        return $this;
    }

    /**
     * Gets productName
     *
     * @return string
     */
    public function getProductName()
    {
        return $this->container['productName'];
    }

    /**
     * Sets productName
     *
     * @param string $productName productName
     *
     * @return $this
     */
    public function setProductName($productName)
    {
        $this->container['productName'] = $productName;

        return $this;
    }

    /**
     * Gets productCategory
     *
     * @return string
     */
    public function getProductCategory()
    {
        return $this->container['productCategory'];
    }

    /**
     * Sets productCategory
     *
     * @param string $productCategory productCategory
     *
     * @return $this
     */
    public function setProductCategory($productCategory)
    {
        $allowedValues = $this->getProductCategoryAllowableValues();
        if (!is_null($productCategory) && !in_array($productCategory, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'productCategory', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['productCategory'] = $productCategory;

        return $this;
    }

    /**
     * Gets billingPeriod
     *
     * @return string
     */
    public function getBillingPeriod()
    {
        return $this->container['billingPeriod'];
    }

    /**
     * Sets billingPeriod
     *
     * @param string $billingPeriod billingPeriod
     *
     * @return $this
     */
    public function setBillingPeriod($billingPeriod)
    {
        $allowedValues = $this->getBillingPeriodAllowableValues();
        if (!is_null($billingPeriod) && !in_array($billingPeriod, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'billingPeriod', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['billingPeriod'] = $billingPeriod;

        return $this;
    }

    /**
     * Gets priceListName
     *
     * @return string
     */
    public function getPriceListName()
    {
        return $this->container['priceListName'];
    }

    /**
     * Sets priceListName
     *
     * @param string $priceListName priceListName
     *
     * @return $this
     */
    public function setPriceListName($priceListName)
    {
        $this->container['priceListName'] = $priceListName;

        return $this;
    }

    /**
     * Gets subscriptionId
     *
     * @return string
     */
    public function getSubscriptionId()
    {
        return $this->container['subscriptionId'];
    }

    /**
     * Sets subscriptionId
     *
     * @param string $subscriptionId subscriptionId
     *
     * @return $this
     */
    public function setSubscriptionId($subscriptionId)
    {
        $this->container['subscriptionId'] = $subscriptionId;

        return $this;
    }

    /**
     * Gets bundleId
     *
     * @return string
     */
    public function getBundleId()
    {
        return $this->container['bundleId'];
    }

    /**
     * Sets bundleId
     *
     * @param string $bundleId bundleId
     *
     * @return $this
     */
    public function setBundleId($bundleId)
    {
        $this->container['bundleId'] = $bundleId;

        return $this;
    }

    /**
     * Gets effectiveDate
     *
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->container['effectiveDate'];
    }

    /**
     * Sets effectiveDate
     *
     * @param \DateTime $effectiveDate effectiveDate
     *
     * @return $this
     */
    public function setEffectiveDate($effectiveDate)
    {
        $this->container['effectiveDate'] = $effectiveDate;

        return $this;
    }

    /**
     * Gets billingPolicy
     *
     * @return string
     */
    public function getBillingPolicy()
    {
        return $this->container['billingPolicy'];
    }

    /**
     * Sets billingPolicy
     *
     * @param string $billingPolicy billingPolicy
     *
     * @return $this
     */
    public function setBillingPolicy($billingPolicy)
    {
        $allowedValues = $this->getBillingPolicyAllowableValues();
        if (!is_null($billingPolicy) && !in_array($billingPolicy, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'billingPolicy', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['billingPolicy'] = $billingPolicy;

        return $this;
    }

    /**
     * Gets priceOverrides
     *
     * @return \Killbill\Client\Swagger\Model\PhasePrice[]
     */
    public function getPriceOverrides()
    {
        return $this->container['priceOverrides'];
    }

    /**
     * Sets priceOverrides
     *
     * @param \Killbill\Client\Swagger\Model\PhasePrice[] $priceOverrides priceOverrides
     *
     * @return $this
     */
    public function setPriceOverrides($priceOverrides)
    {
        $this->container['priceOverrides'] = $priceOverrides;

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
