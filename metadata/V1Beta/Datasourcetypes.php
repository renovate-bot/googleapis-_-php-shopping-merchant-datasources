<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/datasources/v1beta/datasourcetypes.proto

namespace GPBMetadata\Google\Shopping\Merchant\Datasources\V1Beta;

class Datasourcetypes
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
Agoogle/shopping/merchant/datasources/v1beta/datasourcetypes.proto+google.shopping.merchant.datasources.v1beta"�
PrimaryProductDataSourcef
channel (2M.google.shopping.merchant.datasources.v1beta.PrimaryProductDataSource.ChannelB�A�A

feed_label (	B�A�AH �%
content_language (	B�A�AH�
	countries (	B�Al
default_rule (2Q.google.shopping.merchant.datasources.v1beta.PrimaryProductDataSource.DefaultRuleB�At
DefaultRulee
take_from_data_sources (2@.google.shopping.merchant.datasources.v1beta.DataSourceReferenceB�A"Y
Channel
CHANNEL_UNSPECIFIED 
ONLINE_PRODUCTS
LOCAL_PRODUCTS
PRODUCTSB
_feed_labelB
_content_language"�
SupplementalProductDataSource

feed_label (	B�A�AH �%
content_language (	B�A�AH�o
 referencing_primary_data_sources (2@.google.shopping.merchant.datasources.v1beta.DataSourceReferenceB�AB
_feed_labelB
_content_language"X
LocalInventoryDataSource

feed_label (	B�A�A 
content_language (	B�A�A"[
RegionalInventoryDataSource

feed_label (	B�A�A 
content_language (	B�A�A"W
PromotionDataSource
target_country (	B�A�A 
content_language (	B�A�A"�
DataSourceReference
self (H \'
primary_data_source_name (	B�AH ,
supplemental_data_source_name (	B�AH B
data_source_idB�
/com.google.shopping.merchant.datasources.v1betaBDatasourcetypesProtoPZWcloud.google.com/go/shopping/merchant/datasources/apiv1beta/datasourcespb;datasourcespb�+Google.Shopping.Merchant.DataSources.V1Beta�+Google\\Shopping\\Merchant\\DataSources\\V1beta�/Google::Shopping::Merchant::DataSources::V1betabproto3'
        , true);

        static::$is_initialized = true;
    }
}

