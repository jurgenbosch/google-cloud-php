<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1beta/analytics_admin.proto

namespace Google\Analytics\Admin\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for CreateMeasurementProtocolSecret RPC
 *
 * Generated from protobuf message <code>google.analytics.admin.v1beta.CreateMeasurementProtocolSecretRequest</code>
 */
class CreateMeasurementProtocolSecretRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent resource where this secret will be created.
     * Format: properties/{property}/dataStreams/{dataStream}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The measurement protocol secret to create.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1beta.MeasurementProtocolSecret measurement_protocol_secret = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $measurement_protocol_secret = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent resource where this secret will be created.
     *           Format: properties/{property}/dataStreams/{dataStream}
     *     @type \Google\Analytics\Admin\V1beta\MeasurementProtocolSecret $measurement_protocol_secret
     *           Required. The measurement protocol secret to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Beta\AnalyticsAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent resource where this secret will be created.
     * Format: properties/{property}/dataStreams/{dataStream}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent resource where this secret will be created.
     * Format: properties/{property}/dataStreams/{dataStream}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The measurement protocol secret to create.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1beta.MeasurementProtocolSecret measurement_protocol_secret = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Analytics\Admin\V1beta\MeasurementProtocolSecret|null
     */
    public function getMeasurementProtocolSecret()
    {
        return $this->measurement_protocol_secret;
    }

    public function hasMeasurementProtocolSecret()
    {
        return isset($this->measurement_protocol_secret);
    }

    public function clearMeasurementProtocolSecret()
    {
        unset($this->measurement_protocol_secret);
    }

    /**
     * Required. The measurement protocol secret to create.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1beta.MeasurementProtocolSecret measurement_protocol_secret = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Analytics\Admin\V1beta\MeasurementProtocolSecret $var
     * @return $this
     */
    public function setMeasurementProtocolSecret($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1beta\MeasurementProtocolSecret::class);
        $this->measurement_protocol_secret = $var;

        return $this;
    }

}

