<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/datacatalog.proto

namespace Google\Cloud\DataCatalog\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for
 * [ListEntryGroups][google.cloud.datacatalog.v1.DataCatalog.ListEntryGroups].
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.ListEntryGroupsResponse</code>
 */
class ListEntryGroupsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Entry group details.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datacatalog.v1.EntryGroup entry_groups = 1;</code>
     */
    private $entry_groups;
    /**
     * Pagination token to specify in the next call to retrieve the next page of
     * results. Empty if there are no more items.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\DataCatalog\V1\EntryGroup>|\Google\Protobuf\Internal\RepeatedField $entry_groups
     *           Entry group details.
     *     @type string $next_page_token
     *           Pagination token to specify in the next call to retrieve the next page of
     *           results. Empty if there are no more items.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Datacatalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Entry group details.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datacatalog.v1.EntryGroup entry_groups = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEntryGroups()
    {
        return $this->entry_groups;
    }

    /**
     * Entry group details.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datacatalog.v1.EntryGroup entry_groups = 1;</code>
     * @param array<\Google\Cloud\DataCatalog\V1\EntryGroup>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEntryGroups($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DataCatalog\V1\EntryGroup::class);
        $this->entry_groups = $arr;

        return $this;
    }

    /**
     * Pagination token to specify in the next call to retrieve the next page of
     * results. Empty if there are no more items.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Pagination token to specify in the next call to retrieve the next page of
     * results. Empty if there are no more items.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

