<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datalabeling/v1beta1/instruction.proto

namespace Google\Cloud\DataLabeling\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Deprecated: this instruction format is not supported any more.
 * Instruction from a CSV file.
 *
 * Generated from protobuf message <code>google.cloud.datalabeling.v1beta1.CsvInstruction</code>
 */
class CsvInstruction extends \Google\Protobuf\Internal\Message
{
    /**
     * CSV file for the instruction. Only gcs path is allowed.
     *
     * Generated from protobuf field <code>string gcs_file_uri = 1;</code>
     */
    protected $gcs_file_uri = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $gcs_file_uri
     *           CSV file for the instruction. Only gcs path is allowed.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datalabeling\V1Beta1\Instruction::initOnce();
        parent::__construct($data);
    }

    /**
     * CSV file for the instruction. Only gcs path is allowed.
     *
     * Generated from protobuf field <code>string gcs_file_uri = 1;</code>
     * @return string
     */
    public function getGcsFileUri()
    {
        return $this->gcs_file_uri;
    }

    /**
     * CSV file for the instruction. Only gcs path is allowed.
     *
     * Generated from protobuf field <code>string gcs_file_uri = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setGcsFileUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->gcs_file_uri = $var;

        return $this;
    }

}

