<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1beta/resources.proto

namespace Google\Analytics\Admin\V1beta\DataStream;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Data specific to web streams.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1beta.DataStream.WebStreamData</code>
 */
class WebStreamData extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Analytics "Measurement ID", without the "G-" prefix.
     * Example: "G-1A2BCD345E" would just be "1A2BCD345E"
     *
     * Generated from protobuf field <code>string measurement_id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $measurement_id = '';
    /**
     * Output only. ID of the corresponding web app in Firebase, if any.
     * This ID can change if the web app is deleted and recreated.
     *
     * Generated from protobuf field <code>string firebase_app_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $firebase_app_id = '';
    /**
     * Immutable. Domain name of the web app being measured, or empty.
     * Example: "http://www.google.com", "https://www.google.com"
     *
     * Generated from protobuf field <code>string default_uri = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $default_uri = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $measurement_id
     *           Output only. Analytics "Measurement ID", without the "G-" prefix.
     *           Example: "G-1A2BCD345E" would just be "1A2BCD345E"
     *     @type string $firebase_app_id
     *           Output only. ID of the corresponding web app in Firebase, if any.
     *           This ID can change if the web app is deleted and recreated.
     *     @type string $default_uri
     *           Immutable. Domain name of the web app being measured, or empty.
     *           Example: "http://www.google.com", "https://www.google.com"
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Beta\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Analytics "Measurement ID", without the "G-" prefix.
     * Example: "G-1A2BCD345E" would just be "1A2BCD345E"
     *
     * Generated from protobuf field <code>string measurement_id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getMeasurementId()
    {
        return $this->measurement_id;
    }

    /**
     * Output only. Analytics "Measurement ID", without the "G-" prefix.
     * Example: "G-1A2BCD345E" would just be "1A2BCD345E"
     *
     * Generated from protobuf field <code>string measurement_id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setMeasurementId($var)
    {
        GPBUtil::checkString($var, True);
        $this->measurement_id = $var;

        return $this;
    }

    /**
     * Output only. ID of the corresponding web app in Firebase, if any.
     * This ID can change if the web app is deleted and recreated.
     *
     * Generated from protobuf field <code>string firebase_app_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getFirebaseAppId()
    {
        return $this->firebase_app_id;
    }

    /**
     * Output only. ID of the corresponding web app in Firebase, if any.
     * This ID can change if the web app is deleted and recreated.
     *
     * Generated from protobuf field <code>string firebase_app_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setFirebaseAppId($var)
    {
        GPBUtil::checkString($var, True);
        $this->firebase_app_id = $var;

        return $this;
    }

    /**
     * Immutable. Domain name of the web app being measured, or empty.
     * Example: "http://www.google.com", "https://www.google.com"
     *
     * Generated from protobuf field <code>string default_uri = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getDefaultUri()
    {
        return $this->default_uri;
    }

    /**
     * Immutable. Domain name of the web app being measured, or empty.
     * Example: "http://www.google.com", "https://www.google.com"
     *
     * Generated from protobuf field <code>string default_uri = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setDefaultUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->default_uri = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(WebStreamData::class, \Google\Analytics\Admin\V1beta\DataStream_WebStreamData::class);

