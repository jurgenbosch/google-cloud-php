<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/billing/budgets/v1beta1/budget_model.proto

namespace GPBMetadata\Google\Cloud\Billing\Budgets\V1Beta1;

class BudgetModel
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Type\Date::initOnce();
        \GPBMetadata\Google\Type\Money::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
7google/cloud/billing/budgets/v1beta1/budget_model.proto$google.cloud.billing.budgets.v1beta1google/api/resource.protogoogle/protobuf/struct.protogoogle/type/date.protogoogle/type/money.proto"�
Budget
name (	B�A
display_name (	H
budget_filter (2,.google.cloud.billing.budgets.v1beta1.FilterB�AG
amount (22.google.cloud.billing.budgets.v1beta1.BudgetAmountB�AQ
threshold_rules (23.google.cloud.billing.budgets.v1beta1.ThresholdRuleB�AS
all_updates_rule (24.google.cloud.billing.budgets.v1beta1.AllUpdatesRuleB�A
etag (	B�A:]�AZ
$billingbudgets.googleapis.com/Budget2billingAccounts/{billing_account}/budgets/{budget}"�
BudgetAmount.
specified_amount (2.google.type.MoneyH T
last_period_amount (26.google.cloud.billing.budgets.v1beta1.LastPeriodAmountH B
budget_amount"
LastPeriodAmount"�
ThresholdRule
threshold_percent (B�AS
spend_basis (29.google.cloud.billing.budgets.v1beta1.ThresholdRule.BasisB�A"G
Basis
BASIS_UNSPECIFIED 
CURRENT_SPEND
FORECASTED_SPEND"�
AllUpdatesRule
pubsub_topic (	B�A
schema_version (	B�A-
 monitoring_notification_channels (	B�A+
disable_default_iam_recipients (B�A"�
Filter
projects (	B�A
credit_types (	B�Af
credit_types_treatment (2A.google.cloud.billing.budgets.v1beta1.Filter.CreditTypesTreatmentB�A
services (	B�A
subaccounts (	B�AM
labels (28.google.cloud.billing.budgets.v1beta1.Filter.LabelsEntryB�AT
calendar_period (24.google.cloud.billing.budgets.v1beta1.CalendarPeriodB�AH P
custom_period	 (22.google.cloud.billing.budgets.v1beta1.CustomPeriodB�AH I
LabelsEntry
key (	)
value (2.google.protobuf.ListValue:8"�
CreditTypesTreatment&
"CREDIT_TYPES_TREATMENT_UNSPECIFIED 
INCLUDE_ALL_CREDITS
EXCLUDE_ALL_CREDITS
INCLUDE_SPECIFIED_CREDITSB
usage_period"d
CustomPeriod*

start_date (2.google.type.DateB�A(
end_date (2.google.type.DateB�A*S
CalendarPeriod
CALENDAR_PERIOD_UNSPECIFIED 	
MONTH
QUARTER
YEARBp
(com.google.cloud.billing.budgets.v1beta1PZBcloud.google.com/go/billing/budgets/apiv1beta1/budgetspb;budgetspbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

