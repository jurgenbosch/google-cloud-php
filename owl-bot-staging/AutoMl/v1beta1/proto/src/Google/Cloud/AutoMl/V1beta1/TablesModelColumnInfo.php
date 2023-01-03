<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1beta1/tables.proto

namespace Google\Cloud\AutoMl\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An information specific to given column and Tables Model, in context
 * of the Model and the predictions created by it.
 *
 * Generated from protobuf message <code>google.cloud.automl.v1beta1.TablesModelColumnInfo</code>
 */
class TablesModelColumnInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The name of the ColumnSpec describing the column. Not
     * populated when this proto is outputted to BigQuery.
     *
     * Generated from protobuf field <code>string column_spec_name = 1;</code>
     */
    protected $column_spec_name = '';
    /**
     * Output only. The display name of the column (same as the display_name of
     * its ColumnSpec).
     *
     * Generated from protobuf field <code>string column_display_name = 2;</code>
     */
    protected $column_display_name = '';
    /**
     * Output only. When given as part of a Model (always populated):
     * Measurement of how much model predictions correctness on the TEST data
     * depend on values in this column. A value between 0 and 1, higher means
     * higher influence. These values are normalized - for all input feature
     * columns of a given model they add to 1.
     * When given back by Predict (populated iff
     * [feature_importance
     * param][google.cloud.automl.v1beta1.PredictRequest.params] is set) or Batch
     * Predict (populated iff
     * [feature_importance][google.cloud.automl.v1beta1.PredictRequest.params]
     * param is set):
     * Measurement of how impactful for the prediction returned for the given row
     * the value in this column was. Specifically, the feature importance
     * specifies the marginal contribution that the feature made to the prediction
     * score compared to the baseline score. These values are computed using the
     * Sampled Shapley method.
     *
     * Generated from protobuf field <code>float feature_importance = 3;</code>
     */
    protected $feature_importance = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $column_spec_name
     *           Output only. The name of the ColumnSpec describing the column. Not
     *           populated when this proto is outputted to BigQuery.
     *     @type string $column_display_name
     *           Output only. The display name of the column (same as the display_name of
     *           its ColumnSpec).
     *     @type float $feature_importance
     *           Output only. When given as part of a Model (always populated):
     *           Measurement of how much model predictions correctness on the TEST data
     *           depend on values in this column. A value between 0 and 1, higher means
     *           higher influence. These values are normalized - for all input feature
     *           columns of a given model they add to 1.
     *           When given back by Predict (populated iff
     *           [feature_importance
     *           param][google.cloud.automl.v1beta1.PredictRequest.params] is set) or Batch
     *           Predict (populated iff
     *           [feature_importance][google.cloud.automl.v1beta1.PredictRequest.params]
     *           param is set):
     *           Measurement of how impactful for the prediction returned for the given row
     *           the value in this column was. Specifically, the feature importance
     *           specifies the marginal contribution that the feature made to the prediction
     *           score compared to the baseline score. These values are computed using the
     *           Sampled Shapley method.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Tables::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The name of the ColumnSpec describing the column. Not
     * populated when this proto is outputted to BigQuery.
     *
     * Generated from protobuf field <code>string column_spec_name = 1;</code>
     * @return string
     */
    public function getColumnSpecName()
    {
        return $this->column_spec_name;
    }

    /**
     * Output only. The name of the ColumnSpec describing the column. Not
     * populated when this proto is outputted to BigQuery.
     *
     * Generated from protobuf field <code>string column_spec_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setColumnSpecName($var)
    {
        GPBUtil::checkString($var, True);
        $this->column_spec_name = $var;

        return $this;
    }

    /**
     * Output only. The display name of the column (same as the display_name of
     * its ColumnSpec).
     *
     * Generated from protobuf field <code>string column_display_name = 2;</code>
     * @return string
     */
    public function getColumnDisplayName()
    {
        return $this->column_display_name;
    }

    /**
     * Output only. The display name of the column (same as the display_name of
     * its ColumnSpec).
     *
     * Generated from protobuf field <code>string column_display_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setColumnDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->column_display_name = $var;

        return $this;
    }

    /**
     * Output only. When given as part of a Model (always populated):
     * Measurement of how much model predictions correctness on the TEST data
     * depend on values in this column. A value between 0 and 1, higher means
     * higher influence. These values are normalized - for all input feature
     * columns of a given model they add to 1.
     * When given back by Predict (populated iff
     * [feature_importance
     * param][google.cloud.automl.v1beta1.PredictRequest.params] is set) or Batch
     * Predict (populated iff
     * [feature_importance][google.cloud.automl.v1beta1.PredictRequest.params]
     * param is set):
     * Measurement of how impactful for the prediction returned for the given row
     * the value in this column was. Specifically, the feature importance
     * specifies the marginal contribution that the feature made to the prediction
     * score compared to the baseline score. These values are computed using the
     * Sampled Shapley method.
     *
     * Generated from protobuf field <code>float feature_importance = 3;</code>
     * @return float
     */
    public function getFeatureImportance()
    {
        return $this->feature_importance;
    }

    /**
     * Output only. When given as part of a Model (always populated):
     * Measurement of how much model predictions correctness on the TEST data
     * depend on values in this column. A value between 0 and 1, higher means
     * higher influence. These values are normalized - for all input feature
     * columns of a given model they add to 1.
     * When given back by Predict (populated iff
     * [feature_importance
     * param][google.cloud.automl.v1beta1.PredictRequest.params] is set) or Batch
     * Predict (populated iff
     * [feature_importance][google.cloud.automl.v1beta1.PredictRequest.params]
     * param is set):
     * Measurement of how impactful for the prediction returned for the given row
     * the value in this column was. Specifically, the feature importance
     * specifies the marginal contribution that the feature made to the prediction
     * score compared to the baseline score. These values are computed using the
     * Sampled Shapley method.
     *
     * Generated from protobuf field <code>float feature_importance = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setFeatureImportance($var)
    {
        GPBUtil::checkFloat($var);
        $this->feature_importance = $var;

        return $this;
    }

}

