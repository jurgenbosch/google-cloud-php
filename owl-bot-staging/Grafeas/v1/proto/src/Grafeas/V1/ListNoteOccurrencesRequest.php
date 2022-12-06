<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: grafeas/v1/grafeas.proto

namespace Grafeas\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to list occurrences for a note.
 *
 * Generated from protobuf message <code>grafeas.v1.ListNoteOccurrencesRequest</code>
 */
class ListNoteOccurrencesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the note to list occurrences for in the form of
     * `projects/[PROVIDER_ID]/notes/[NOTE_ID]`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * The filter expression.
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     */
    protected $filter = '';
    /**
     * Number of occurrences to return in the list.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     */
    protected $page_size = 0;
    /**
     * Token to provide to skip to a particular spot in the list.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     */
    protected $page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The name of the note to list occurrences for in the form of
     *           `projects/[PROVIDER_ID]/notes/[NOTE_ID]`.
     *     @type string $filter
     *           The filter expression.
     *     @type int $page_size
     *           Number of occurrences to return in the list.
     *     @type string $page_token
     *           Token to provide to skip to a particular spot in the list.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Grafeas\V1\Grafeas::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the note to list occurrences for in the form of
     * `projects/[PROVIDER_ID]/notes/[NOTE_ID]`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the note to list occurrences for in the form of
     * `projects/[PROVIDER_ID]/notes/[NOTE_ID]`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The filter expression.
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * The filter expression.
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * Number of occurrences to return in the list.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Number of occurrences to return in the list.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Token to provide to skip to a particular spot in the list.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Token to provide to skip to a particular spot in the list.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

