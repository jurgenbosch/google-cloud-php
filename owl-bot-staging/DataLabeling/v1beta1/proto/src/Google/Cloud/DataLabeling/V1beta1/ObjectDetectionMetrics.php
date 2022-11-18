<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datalabeling/v1beta1/evaluation.proto

namespace Google\Cloud\DataLabeling\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metrics calculated for an image object detection (bounding box) model.
 *
 * Generated from protobuf message <code>google.cloud.datalabeling.v1beta1.ObjectDetectionMetrics</code>
 */
class ObjectDetectionMetrics extends \Google\Protobuf\Internal\Message
{
    /**
     * Precision-recall curve.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.PrCurve pr_curve = 1;</code>
     */
    protected $pr_curve = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DataLabeling\V1beta1\PrCurve $pr_curve
     *           Precision-recall curve.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datalabeling\V1Beta1\Evaluation::initOnce();
        parent::__construct($data);
    }

    /**
     * Precision-recall curve.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.PrCurve pr_curve = 1;</code>
     * @return \Google\Cloud\DataLabeling\V1beta1\PrCurve|null
     */
    public function getPrCurve()
    {
        return $this->pr_curve;
    }

    public function hasPrCurve()
    {
        return isset($this->pr_curve);
    }

    public function clearPrCurve()
    {
        unset($this->pr_curve);
    }

    /**
     * Precision-recall curve.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.PrCurve pr_curve = 1;</code>
     * @param \Google\Cloud\DataLabeling\V1beta1\PrCurve $var
     * @return $this
     */
    public function setPrCurve($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataLabeling\V1beta1\PrCurve::class);
        $this->pr_curve = $var;

        return $this;
    }

}

