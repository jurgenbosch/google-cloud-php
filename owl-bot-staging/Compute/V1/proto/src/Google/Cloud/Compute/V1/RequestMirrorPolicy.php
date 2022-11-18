<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A policy that specifies how requests intended for the route's backends are shadowed to a separate mirrored backend service. The load balancer doesn't wait for responses from the shadow service. Before sending traffic to the shadow service, the host or authority header is suffixed with -shadow.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.RequestMirrorPolicy</code>
 */
class RequestMirrorPolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * The full or partial URL to the BackendService resource being mirrored to. The backend service configured for a mirroring policy must reference backends that are of the same type as the original backend service matched in the URL map. Serverless NEG backends are not currently supported as a mirrored backend service. 
     *
     * Generated from protobuf field <code>optional string backend_service = 306946058;</code>
     */
    protected $backend_service = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $backend_service
     *           The full or partial URL to the BackendService resource being mirrored to. The backend service configured for a mirroring policy must reference backends that are of the same type as the original backend service matched in the URL map. Serverless NEG backends are not currently supported as a mirrored backend service. 
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The full or partial URL to the BackendService resource being mirrored to. The backend service configured for a mirroring policy must reference backends that are of the same type as the original backend service matched in the URL map. Serverless NEG backends are not currently supported as a mirrored backend service. 
     *
     * Generated from protobuf field <code>optional string backend_service = 306946058;</code>
     * @return string
     */
    public function getBackendService()
    {
        return isset($this->backend_service) ? $this->backend_service : '';
    }

    public function hasBackendService()
    {
        return isset($this->backend_service);
    }

    public function clearBackendService()
    {
        unset($this->backend_service);
    }

    /**
     * The full or partial URL to the BackendService resource being mirrored to. The backend service configured for a mirroring policy must reference backends that are of the same type as the original backend service matched in the URL map. Serverless NEG backends are not currently supported as a mirrored backend service. 
     *
     * Generated from protobuf field <code>optional string backend_service = 306946058;</code>
     * @param string $var
     * @return $this
     */
    public function setBackendService($var)
    {
        GPBUtil::checkString($var, True);
        $this->backend_service = $var;

        return $this;
    }

}

