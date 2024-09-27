<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/datasources/v1beta/fileuploads.proto

namespace Google\Shopping\Merchant\DataSources\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for the GetFileUploadRequest method.
 *
 * Generated from protobuf message <code>google.shopping.merchant.datasources.v1beta.GetFileUploadRequest</code>
 */
class GetFileUploadRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the data source file upload to retrieve.
     * Format:
     * `accounts/{account}/dataSources/{datasource}/fileUploads/latest`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. The name of the data source file upload to retrieve.
     *                     Format:
     *                     `accounts/{account}/dataSources/{datasource}/fileUploads/latest`
     *                     Please see {@see FileUploadsServiceClient::fileUploadName()} for help formatting this field.
     *
     * @return \Google\Shopping\Merchant\DataSources\V1beta\GetFileUploadRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the data source file upload to retrieve.
     *           Format:
     *           `accounts/{account}/dataSources/{datasource}/fileUploads/latest`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Shopping\Merchant\Datasources\V1Beta\Fileuploads::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the data source file upload to retrieve.
     * Format:
     * `accounts/{account}/dataSources/{datasource}/fileUploads/latest`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the data source file upload to retrieve.
     * Format:
     * `accounts/{account}/dataSources/{datasource}/fileUploads/latest`
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

}

