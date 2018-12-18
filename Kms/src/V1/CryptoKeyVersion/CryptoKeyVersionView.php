<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/kms/v1/resources.proto

namespace Google\Cloud\Kms\V1\CryptoKeyVersion;

/**
 * A view for [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion]s. Controls the level of detail returned
 * for [CryptoKeyVersions][google.cloud.kms.v1.CryptoKeyVersion] in
 * [KeyManagementService.ListCryptoKeyVersions][google.cloud.kms.v1.KeyManagementService.ListCryptoKeyVersions] and
 * [KeyManagementService.ListCryptoKeys][google.cloud.kms.v1.KeyManagementService.ListCryptoKeys].
 *
 * Protobuf type <code>google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionView</code>
 */
class CryptoKeyVersionView
{
    /**
     * Default view for each [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion]. Does not include
     * the [attestation][google.cloud.kms.v1.CryptoKeyVersion.attestation] field.
     *
     * Generated from protobuf enum <code>CRYPTO_KEY_VERSION_VIEW_UNSPECIFIED = 0;</code>
     */
    const CRYPTO_KEY_VERSION_VIEW_UNSPECIFIED = 0;
    /**
     * Provides all fields in each [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion], including the
     * [attestation][google.cloud.kms.v1.CryptoKeyVersion.attestation].
     *
     * Generated from protobuf enum <code>FULL = 1;</code>
     */
    const FULL = 1;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CryptoKeyVersionView::class, \Google\Cloud\Kms\V1\CryptoKeyVersion_CryptoKeyVersionView::class);
