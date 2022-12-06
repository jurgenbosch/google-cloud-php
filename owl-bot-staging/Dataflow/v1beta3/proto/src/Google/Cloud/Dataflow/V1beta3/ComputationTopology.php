<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/dataflow/v1beta3/streaming.proto

namespace Google\Cloud\Dataflow\V1beta3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * All configuration data for a particular Computation.
 *
 * Generated from protobuf message <code>google.dataflow.v1beta3.ComputationTopology</code>
 */
class ComputationTopology extends \Google\Protobuf\Internal\Message
{
    /**
     * The system stage name.
     *
     * Generated from protobuf field <code>string system_stage_name = 1;</code>
     */
    protected $system_stage_name = '';
    /**
     * The ID of the computation.
     *
     * Generated from protobuf field <code>string computation_id = 5;</code>
     */
    protected $computation_id = '';
    /**
     * The key ranges processed by the computation.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.KeyRangeLocation key_ranges = 2;</code>
     */
    private $key_ranges;
    /**
     * The inputs to the computation.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.StreamLocation inputs = 3;</code>
     */
    private $inputs;
    /**
     * The outputs from the computation.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.StreamLocation outputs = 4;</code>
     */
    private $outputs;
    /**
     * The state family values.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.StateFamilyConfig state_families = 7;</code>
     */
    private $state_families;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $system_stage_name
     *           The system stage name.
     *     @type string $computation_id
     *           The ID of the computation.
     *     @type array<\Google\Cloud\Dataflow\V1beta3\KeyRangeLocation>|\Google\Protobuf\Internal\RepeatedField $key_ranges
     *           The key ranges processed by the computation.
     *     @type array<\Google\Cloud\Dataflow\V1beta3\StreamLocation>|\Google\Protobuf\Internal\RepeatedField $inputs
     *           The inputs to the computation.
     *     @type array<\Google\Cloud\Dataflow\V1beta3\StreamLocation>|\Google\Protobuf\Internal\RepeatedField $outputs
     *           The outputs from the computation.
     *     @type array<\Google\Cloud\Dataflow\V1beta3\StateFamilyConfig>|\Google\Protobuf\Internal\RepeatedField $state_families
     *           The state family values.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Dataflow\V1Beta3\Streaming::initOnce();
        parent::__construct($data);
    }

    /**
     * The system stage name.
     *
     * Generated from protobuf field <code>string system_stage_name = 1;</code>
     * @return string
     */
    public function getSystemStageName()
    {
        return $this->system_stage_name;
    }

    /**
     * The system stage name.
     *
     * Generated from protobuf field <code>string system_stage_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSystemStageName($var)
    {
        GPBUtil::checkString($var, True);
        $this->system_stage_name = $var;

        return $this;
    }

    /**
     * The ID of the computation.
     *
     * Generated from protobuf field <code>string computation_id = 5;</code>
     * @return string
     */
    public function getComputationId()
    {
        return $this->computation_id;
    }

    /**
     * The ID of the computation.
     *
     * Generated from protobuf field <code>string computation_id = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setComputationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->computation_id = $var;

        return $this;
    }

    /**
     * The key ranges processed by the computation.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.KeyRangeLocation key_ranges = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getKeyRanges()
    {
        return $this->key_ranges;
    }

    /**
     * The key ranges processed by the computation.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.KeyRangeLocation key_ranges = 2;</code>
     * @param array<\Google\Cloud\Dataflow\V1beta3\KeyRangeLocation>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setKeyRanges($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataflow\V1beta3\KeyRangeLocation::class);
        $this->key_ranges = $arr;

        return $this;
    }

    /**
     * The inputs to the computation.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.StreamLocation inputs = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInputs()
    {
        return $this->inputs;
    }

    /**
     * The inputs to the computation.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.StreamLocation inputs = 3;</code>
     * @param array<\Google\Cloud\Dataflow\V1beta3\StreamLocation>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInputs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataflow\V1beta3\StreamLocation::class);
        $this->inputs = $arr;

        return $this;
    }

    /**
     * The outputs from the computation.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.StreamLocation outputs = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOutputs()
    {
        return $this->outputs;
    }

    /**
     * The outputs from the computation.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.StreamLocation outputs = 4;</code>
     * @param array<\Google\Cloud\Dataflow\V1beta3\StreamLocation>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOutputs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataflow\V1beta3\StreamLocation::class);
        $this->outputs = $arr;

        return $this;
    }

    /**
     * The state family values.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.StateFamilyConfig state_families = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStateFamilies()
    {
        return $this->state_families;
    }

    /**
     * The state family values.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.StateFamilyConfig state_families = 7;</code>
     * @param array<\Google\Cloud\Dataflow\V1beta3\StateFamilyConfig>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStateFamilies($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataflow\V1beta3\StateFamilyConfig::class);
        $this->state_families = $arr;

        return $this;
    }

}

